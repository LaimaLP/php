<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
</head>

<body style="background-color: 
    <?php 
        if (($_GET['color'] ?? '') == '1') {
            echo "red; color:black";
        }else{
            echo "black; color:white";
        } 
    ?>
  ">
  
    <h1> 1 Task </h1>
    <p> Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda
        su failo vardu, o kita nuoroda su failo vardu ir GET duomenų perdavimo metodu
        perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu
        kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo
        kintamojo, vėl pasidarytų juodas.</p>
    <a href="http://localhost/backEnd/php/012/homework_WEB.php/"> Homework_WEB </a>
    <br>
    <a href="http://localhost/backEnd/php/012/homework_WEB.php/?color=1"> Homework_WEB color </a>





</body>

</html>



<?php
