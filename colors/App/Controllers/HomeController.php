<?php
//gana esminis dalykas
namespace Colors\App\Controllers;

use Colors\App\App;


class HomeController
{
    public function index()
    {
        $number = rand(1, 100);
        //i templeita perduodame data
        return App::view('home', [
            'homeNumber' => $number,
            'title' => 'Home sweet home'
        ]);
    }

    public function color($color)
    {
        return App::view('home-color', [
            'homeColor' => $color,
            'title' => 'Home sweet home'
        ]);
    }
}