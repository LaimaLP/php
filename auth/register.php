<?php
    session_start(); //optinional: jei esi prisijuges, neduoda registruotis
    if (isset($_SESSION['login']) && $_SESSION['login'] == 'sitas yra prisilogines') {
        header('Location: http://localhost/backEnd/php/auth//index.php');
        die;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//tikrinam ar passwordai sutampa
        if ($_POST['password'] != $_POST['password2']) {
            $_SESSION['error'] = 'Passwords do not match';
            $_SESSION['old_data'] = $_POST; //pries numirdami i sesija irasom old data ir 42eil
            header('Location: http://localhost/backEnd/php/auth/register.php');
            die;
        }
        $users = file_get_contents(__DIR__.'/data/users.ser'); //jei metodas post, paimam duomenis, isserializuojam
        $users = unserialize($users); 
        // check user existence, kad nesikartotu tuo paciu emailu
        foreach ($users as $user) { 
            if ($user['email'] == $_POST['email']) {
                $_SESSION['error'] = 'User with this email already exists';
                $_SESSION['old_data'] = $_POST;
                header('Location: http://localhost/backEnd/php/auth/register.php');
                die;
            }
        }
        $user = [ //po unser sukuria masyva
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => sha1($_POST['password']),
        ];
        $users[] = $user; //idedame i users, naujus userius suserializ, kai prisiregina, redirectinam i logina
        file_put_contents(__DIR__.'/data/users.ser', serialize($users));
        header('Location: http://localhost/backEnd/php/auth/login.php');
        die;
    }
    
    if (isset($_SESSION['error'])) {
        $error = $_SESSION['error'];
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['old_data'])) {
        $old_data = $_SESSION['old_data'];
        unset($_SESSION['old_data']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register to Forest</title>
</head>
<body>
    <h1>Register to Forest</h1>
    <?php if (isset($error)): ?>
        <h1 style="color: crimson;"><?= $error ?></h1>
    <?php endif ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name" value="<?= isset($old_data['name']) ? $old_data['name'] : '' ?>">
        <input type="text" name="email" value="<?= isset($old_data['email']) ? $old_data['email'] : '' ?>" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password2" placeholder="Repeat Password">
        <button type="submit">Register</button>
    </form>
</body>
</html>