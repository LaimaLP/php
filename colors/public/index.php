<?php
//pagrindimas failas su kuriu snekames
use Colors\App\App;
use Colors\App\Message;
use Colors\App\Auth;
session_start(); //paleidizam sesijos starta, del messagu
require '../vendor/autoload.php';
//konstantos
define('DB', 'file');
define('ROOT', __DIR__ . '/../'); //rodo kur musu visi faila sudeti
define('URL', 'http://super-colors.test'); //rodo, koks adresiukas






//sitas praeina labai anksti, vos praeinam pro duris;
Message::get(); //sita paleiziam kad butu sukurtas obj
Auth::get();

echo App::run();

