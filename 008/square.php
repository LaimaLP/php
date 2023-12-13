<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Star Square</title>
    <link href="style2.css">
</head>
<body>
    <div class="square-container">
        <?php
            $size = 100;
            for ($i = 0; $i < $size; $i++) {
                echo str_repeat('*', $size) . '<br>';
            }
        ?>
    </div>
</body>
</html>