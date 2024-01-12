<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL ?>/main.css?v=<?= time() ?>"> 
    <!-- isimti time()j= jau produkcijoje, reikalingas-gera praktika - duomenu atnaujinimui -->
    <script src="<?= URL ?>/main.js?v=<?= time() ?>" defer></script>
    <title><?= $title ?? 'Untitled' ?></title>
</head>
<body>    