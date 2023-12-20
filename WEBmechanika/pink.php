<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Location: http://localhost/backEnd/php/WEBmechanika/rose.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: pink;">
    <h1> Hello PINK </h1>

    <form action="http://localhost/backEnd/php/WEBmechanika/rose.php" method="POST">
        <button type="submit"> GO TO ROSE</button>
    </form>

</body>

</html>