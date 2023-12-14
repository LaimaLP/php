<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <title>Star Square</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="square-container">
       <p> Spalvotas rombas</p>
        <?php

        $row = "";
        for ($i = 0; $i <= 10; $i++) {
            $row .= '*';
            $red = rand(0, 255);
            $green = rand(0, 255);
            $blue = rand(0, 255);
            $randomColor =  "rgb($red, $green, $blue)";
            echo "<p style='color: $randomColor;'>$row </p>";
        }
        for ($i = 9; $i >=0; $i--) {
            $row =  substr($row, 0, -1);
            $red = rand(0, 255);
            $green = rand(0, 255);
            $blue = rand(0, 255);
            $randomColor =  "rgb($red, $green, $blue)";
            echo "<p style='color: $randomColor;'>$row <br> </p>";
        }

        ?>
    </div>
</body>

</html>