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
    <p> Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.</p>
    <a href="http://localhost/backEnd/php/WEBmechanika/second.php/"> Homework_WEB </a>
</body>

</html>