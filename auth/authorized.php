<?php
    session_start(); // jeigu nera logino, arba loginas nelygus, redirectinam prisiloginti
    if (!isset($_SESSION['login']) || $_SESSION['login'] != 'sitas yra prisilogines') {
        header('Location: http://localhost/backEnd/php/auth/login.php');
        die;
    }
?>
<!-- //priesingu atveju rodom si psl -->
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inside the Forest</title>
</head>
<body>
    <h1>Welcome to Forest members page</h1>
    <h2>Hello, <?= $_SESSION['name'] ?></h2>
    <a href="index.php">Go to main page</a>
    <form action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>

    
</body>
</html>