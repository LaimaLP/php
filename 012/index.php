<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Web mechanika</title>
</head>

<body>
    <pre>
<h1> WEB mechanika </h1>
   <a href ="http://localhost/backEnd/php/012/?kas=kazkas"> Linkas kazkas </a>
   <a href ="http://localhost/backEnd/php/012/?kas=kitas"> Linkas kitas </a>
<a href="http://localhost/backEnd/php/012/?kas=kitas&kitas=kitasDalykas"> Linkas kitas ir kitas  </a>
   <?php
    print_r($_GET);

    print_r($_POST);

    print_r($_SERVER['REQUEST_METHOD']);



    if (($_GET['kas'] ?? '') == 'kazkas') {
        echo '<h2>Labas, kazkas! </h2>';
    }
    if (($_GET['kas'] ?? '') == 'kitas') {
        echo '<h2>Labas, kitas! </h2>';
    }
    ?>


<form action="http://localhost/backEnd/php/012/" method="get">
        <input type='text' name='kas'> 
        <input type='color' name='kitas'> 
        <input type='hidden' name='a' value = '5'> 
        <button type="submit"> GET IT</button>
 </form>
 <form action="http://localhost/backEnd/php/012/?z=88" method="post">
        <input type='text' name='kas'> 
        <input type='color' name='kitas'> 
        <input type='hidden' name='a' value = '5'> 
        <button type="submit"> POST IT</button>
 </form>

   </pre>
</body>

</html>


<?php
/*Duomenis serveri galim persiusti: 
                                Query GET, POST (gali buti perduodami get ir post metodais)
                                Body POST
                                Params GET, POST */
