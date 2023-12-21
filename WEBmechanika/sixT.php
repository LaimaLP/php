<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $color = "yellow";
// }else{
//     if($_SERVER['REQUEST_METHOD'] == 'GET'){
//     $color = "green";
// }
// }


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Location: http://localhost/backEnd/php/WEBmechanika/sixT.php?yellow');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_SERVER['QUERY_STRING'] !== '') {
    if ($_SERVER['QUERY_STRING'] == "green=") {
        $color = "green";
    } else {
        $color = $_SERVER['QUERY_STRING'];
    }
}


// $color ="";

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $color = "yellow";

// }

// if($_SERVER['REQUEST_METHOD'] == 'GET' ){
//     $color = "green";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 Task</title>
</head>

<body style="background-color: <?php echo $color ?>">
    <h1> 6 Task </h1>
    <?php echo $_SERVER['QUERY_STRING'] ?>


    <form action="" method="GET">
        <input type='hidden' name='green'>
        <button type="submit"> by GET method</button>
    </form>

    <br>
    <br>
    <br>

    <form action="" method="POST">
        <input type='hidden' name='yellow'>
        <button type="submit"> by POST method</button>
    </form>
</body>

</html>