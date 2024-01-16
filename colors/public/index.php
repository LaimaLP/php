<?php
//pagrindimas failas su kuriu snekames
use Colors\App\App;
use Colors\App\Message;
use Colors\App\Auth;
session_start();

require '../vendor/autoload.php';

//konstantos
define('ROOT', __DIR__ . '/../'); //rodo kur musu visi faila sudeti
define('URL', 'http://super-colors.test'); //rodo, koks adresiukas

Message::get();
Auth::get();

echo App::run();

