<?php

namespace Colors\App;

use Colors\App\Controllers\HomeController;
use Colors\App\Controllers\ColorController;
use Colors\App\Message;
use Colors\App\Controllers\LoginController;

class App
{
    public static function run()
    {
        $server = $_SERVER['REQUEST_URI'];
        // $server = str_replace('/colors/public/', '', $server);

        $server = preg_replace('/\?.*$/', '', $server); //istrinam viska kas yra po klaustumo iki pabaigos

        $url = explode('/', $server);
        array_shift($url);
        return self::router($url);
    }


    private static function router($url)
    {
        $method = $_SERVER['REQUEST_METHOD'];

        if ('GET' == $method && count($url) == 1 && $url[0] == '') {
            return (new HomeController)->index();
        }
        if ('GET' == $method && count($url) == 1 && $url[0] == 'login') {
            return (new LoginController)->index();
        }

        if ('POST' == $method && count($url) == 1 && $url[0] == 'login') {
            return (new LoginController)->login($_POST);
        }

        if ('POST' == $method && count($url) == 1 && $url[0] == 'logout') {
            return (new LoginController)->logout();
        }

//midelware pvz, isiterpia i viduri
        if ($url[0] === 'colors' && !Auth::get()->getStatus()) {
            return self::redirect('login');
        }



        if ('GET' == $method && count($url) == 1 && $url[0] == 'colors') {
            return (new ColorController)->index($_GET);
        }

        //kai narsyklej nuspaudziam sita, kad create color...sitas toliau paleidzia create
        if ('GET' == $method && count($url) == 2 && $url[0] == 'colors' && $url[1] == 'create') {
            return (new ColorController)->create();
        }

        //is formos gaunam i directinama i store per post, pasileidzia store metodas, pasiima visa POST masyva(size ir color)
        if ('POST' == $method && count($url) == 2 && $url[0] == 'colors' && $url[1] == 'store') {
            return (new ColorController)->store($_POST);
        }

        if ('POST' == $method && count($url) == 3 && $url[0] == 'colors' && $url[1] == 'destroy') {
            return (new ColorController)->destroy($url[2]);
            // o ta treciaji pasiimam i destroy
        }

        if ('GET' == $method && count($url) == 3 && $url[0] == 'colors' && $url[1] == 'edit') {
            return (new ColorController)->edit($url[2]);
        }

        if ('POST' == $method && count($url) == 3 && $url[0] == 'colors' && $url[1] == 'update') {
            return (new ColorController)->update($url[2], $_POST);
        }


        return '<h1>404</h1>';
    }

    public static function view($view, $data = [])
    {
        extract($data); //(pvz jei i templeita perduodam kintamaji.) 
        //extractinam indexus, is tu indexus padaro tokio pat vardo kintamuosius
        //ir tiems kintamiesiems priskiria to kintamojo reiksme, taip sios f-jos viduje gaunam pvz $number kinatamaji


        $msg = Message::get()->show(); // cia gausim arba false arba masyva su zinute ir spalva statuso
        $auth = Auth::get()->getStatus();

    //output buffer start. Neleidzia echointi sitas. Leidzia arba kai pasibaigia scriptas arba surinkus buferi i "stikline -> $content" ir ta buferi istrinam
    //viskas kas buvo isechointa surenkam i $content
        ob_start(); 

        require ROOT . 'views/top.php';
        require ROOT . "views/$view.php";
        require ROOT . 'views/bottom.php';
        $content = ob_get_clean();
        return $content; 
        //
    }

    public static function redirect($url)
    {
        header('Location: ' . URL . '/' . $url);
        return null;
    }
}
