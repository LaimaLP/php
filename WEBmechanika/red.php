<?php
if (($_GET['as'] ?? '') == 'raudonas') {
    header('Location: http://localhost/backEnd/php/WEBmechanika/blue.php/');
    exit;
}
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
</head>

<body style="background-color: red">

    <h1> 4 Task </h1>

    <br>
    <br>
    <br/>
    <a href="http://localhost/backEnd/php/WEBmechanika/red.php/?as=raudonas"> Go to Red page </a>
   
</body>

</html>

