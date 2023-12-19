<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 task</title>
</head>
<?php
if (($_GET['color'] ?? '')) {
    $color = '#' . $_GET['color'];
} else {
    $color = "black;";
}
?>

<body style="background-color: <?php echo $color ?>">
    <h1> 2 Task </h1>
    <a href="http://localhost/backEnd/php/WEBmechanika/second.php/"> Homework_WEB </a>


    <!-- 3uzd -->
    <form action="http://localhost/backEnd/php/WEBmechanika/second.php/" method="get">
        <input type='text' name='color'>
        <button type="submit"> GET COLOR</button>
    </form>
</body>

</html>