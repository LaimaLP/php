<?php
if ($_SERVER['PHP_SELF'] == "/backEnd/php/WEBmechanika/blue.php/") {
    header('Location: http://localhost/backEnd/php/WEBmechanika/red.php/');
    die;
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
</head>

<body style="background-color: blue">
<?php print_r($_SERVER['PHP_SELF']) ?>
    <h1> 4 Task </h1>
    <br>
    <br>
    <br/>
    <a onclick="test()"; href="http://localhost/backEnd/php/WEBmechanika/blue.php/"> Go to Blue page </a>
</body>

</html>

