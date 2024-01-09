<?php
//vietoj include naudojama bendrine f-ja:

spl_autoload_register('myAutoLoader'); //i vidu eina f-ja

function myAutoLoader($className){
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path . $className .$extension;

    include_once $fullPath;
}
//automatiskai paima faila, kuri norim panauoti

?>