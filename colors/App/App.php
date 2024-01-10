<?php

namespace Colors\App;

use Colors\App\Controllers\HomeController;

class App
{
    public static function run()
    {
        $server = $_SERVER['REQUEST_URI'];
        // $server = str_replace('/colors/public/', '', $server); jei eiciau kitu keliu per public
        $url = explode('/', $server);
        array_shift($url);
        // print_r($url); parodo areju su url duomenim
       
        return self::router($url);
    }

    private static function router($url)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        
        if ('GET' == $method && count($url) == 1 && $url[0] == '') {
            return (new HomeController)->index();
        }
        if ('GET' == $method && count($url) == 2 && $url[0] == 'home') {
            return (new HomeController)->color($url[1]);
        }


        return '<h1>404</h1>';
    }

    public static function view($view, $data = [])
    {
        extract($data); //pvz i templeita perduodame koki kintamaji,pvz nr sugeneravimas yra kontrolerio reikalas/ 
                        //ten perduodamas,.. extraxteris extractina idx ir is tu idx padaro tokio pacio vardo kintamuosius
                         //ir kintamiesiems priskiria to indexo reiksme
                         print_r($data);
       //f-jos viduje atsiranda kintamasis homenumber
        ob_start(); //output buffer, niekas neiseina su echo. ATlaisvinamas arba kai pasibaigia scriptas arba visa turini surinkti i kintamaji content ir ta buferi istrinam
        require ROOT . 'views/top.php';
        require ROOT . "views/$view.php";
        require ROOT . 'views/bottom.php';
        $content = ob_get_clean();
        return $content; //contentas view grazina i kontroleri, kontroleris i routeri, routeris i run, o run isechoina
    }
}