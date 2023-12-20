<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $color = "yellow";
// }else{
//     if($_SERVER['REQUEST_METHOD'] == 'GET'){
//     $color = "green";
// }
// }

// if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['CONTENT_LENGTH']>0) {
//     $color = "yellow";
// }else{
//     if($_SERVER['REQUEST_METHOD'] == 'GET' && $_SERVER['QUERY_STRING']!== ''){
//     $color = "green";
// }
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = "yellow";
}elseif($_SERVER['REQUEST_METHOD'] == 'GET' ){
    $color = "green";
}else{
    $color = "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style= "background-color: <?php echo $color ?>">
    <h1> 6 Task </h1>
    <?php echo $_SERVER['REQUEST_METHOD'] ?>
    <?php echo $color ?>

    <form action="http://localhost/backEnd/php/WEBmechanika/sixT.php" method="GET">
        <input type='text' name='get'>
        <button type="submit"> by GET method</button>
    </form>

<br>
<br> 
<br>

        <form action="http://localhost/backEnd/php/WEBmechanika/sixT.php" method="POST">
            <input type='text' name=''>
            <button type="submit"> by POST method</button>
        </form>
</body>

</html>