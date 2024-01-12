<?php

namespace Colors\App;

use Colors\App\Controllers\HomeController;
use Colors\App\Controllers\ColorController;

class App
{
    public static function run()
    {
        $server = $_SERVER['REQUEST_URI'];
        echo '<br>server <br>';
        // print_r($server);

        // $server = str_replace('/colors/public/', '', $server); jei eiciau kitu keliu per public
        $url = explode('/', $server); //splitina stringa per /, arr[0] niekas, arr[1 ir kiti] jau reiksmes po /
        array_shift($url); //kadangi visada pirmasis yra tuscias, ji pasalinam, toliau dirbam su arr.
        return self::router($url);
    }

    private static function router($url)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        
        if ($method == 'GET' && count($url) == 1 && $url[0] == '') {
            
            return (new HomeController)->index();
        }
        if ($method == 'GET' && count($url) == 3 && $url[0] != '') {
            return (new HomeController)->color($url[2]);
        }
        if ($method == 'GET' && count($url) == 2 && $url[0] == 'colors' && $url[1] == 'create') {
            return (new ColorController)->create();
        }
        if ('POST' == $method && count($url) == 2 && $url[0] == 'colors' && $url[1] == 'store') {
            return (new ColorController)->store($_POST);
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
        require ROOT . "views/top.php";
        require ROOT . "views/$view.php";
        require ROOT . 'views/bottom.php';
        $content = ob_get_clean();
        return $content; //contentas view grazina i kontroleri, kontroleris i routeri, routeris i run, o run isechoina
    }
}