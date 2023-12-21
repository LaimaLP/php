<?php
    session_start();
    // OPTION 1. FIRSTLY YOU OPEN A PAGE, AND IT IS ALWAYS GET REQUEST SO YOU SET _SESSION VARIABLE
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_SESSION['color'])) {
        $_SESSION['color'] = "white";
        $color = $_SESSION['color'];
    }
    // ONLY THEN YOU DO STUFF, BUT _SESSION VARIABLE IS ALREADY SET
    // OPTION 2. WHEN REQUEST METHOD IS POST
    elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['color'] = "yellow";
        header('Location: http://localhost/backEnd/php/WEBmechanika/bartVersion.php');
        die;
    }
    // YOU REDIRECT. BUT OPTION 1 IS SKIPPED, CAUSE _SESSION VAR IS SET,
    // OPTION 2. IS SKIPPED TOO FOR OBVIOUS REASONS.
    // SO YOUR ONLY OPTION IS REQUEST GET WITH SETTED _SESSION VARIABLE:
    // OPTION 3.
    elseif($_SERVER['REQUEST_METHOD'] == 'GET'){
        if($_SESSION['color'] == "white"){
            // CHANGE TO GREEN CAUSE IT WAS WITH FORM GET - YOU GOT UNCHANGED _SESSION VAR
            $color = "green";
        }
        else{
            // NO CHANGE CAUSE WHITE WAS CHANGED TO YELLOW ONLY THROUGH POST FORM
            $color = $_SESSION['color'];
            // SET TO WHITE COLOR AGAIN BECAUSE: IF YOU DON'T, AND YOU PRESS "GET IT", IT STAYS YELLOW, BECAUSE OPTION 1 WILL ALWAYS BE SKIPPED.
            // AND YOU WILL GET TO THE OPTION 3 WHICH ALWAYS GET YOU TO COLOR YELLOW.
            // IF YOU CHANGE THE COLOR TO WHITE: POST IT WILL CHANGE IT TO YELLOW ANYWAY, AND GET IT WILL REACH OPTION 3 ANYWAY TOO...
            $_SESSION['color'] = "white";
        }
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?= $color ?>;">
    <form action="" method="get">
        <button type="submit">GET IT</button>
    </form>
    <form action="" method="post">
        <button type="submit">POST IT</button>
    </form>
</form>
</body>
</html>