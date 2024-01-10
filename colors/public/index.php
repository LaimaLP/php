<?php
//pagrindimas failas su kuriu snekames
use Colors\App\App;
require '../vendor/autoload.php';

//konstantos
define('ROOT', __DIR__ . '/../'); //rodo kur musu visi faila sudeti
define('URL', 'http://super-colors.test'); //rodo, koks adresiukas


echo App::run();

