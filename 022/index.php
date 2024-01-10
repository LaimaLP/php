<?php

require __DIR__ .'/' .$class . '.php';


spl_autoload_register(function($class){
    // echo "Loading class $class <br> 1 time<br>";
    require __DIR__ .'/' .$class . '.php';
});
// spl_autoload_register(function($class){
//     echo "Loading class $class <br> 2 time<br>";
//     require __DIR__ ."/A.php";
// });
// spl_autoload_register(function($class){
//     echo "Loading class $class<br> 3 time<br>";
// });



$a = new A;
$b = new B;

//vendor kaip JS node module; dalykai nejudinami, nelendame;
//

