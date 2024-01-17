<?php

$host = '127.0.0.1'; //'localhost'
$db   = 'forest'; //duomenu bases pavadinimas 
$user = 'root'; //useris php myAdmin 
$pass = ''; //slapiko nera
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [ //standartine konfiguracija
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //masyvo indeksas masyvo reiksme
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options); //sukuriam nauja obj naudojant suvestus dalykus
//Tarpininkas su kuriuo snekesim su DB
// pdo???? funkcionaluma susiristi su duomenu baze ...tam reikia db vardo slaptazodzio ir vartotojo. fsio, pdo ready to go. 


// SELECT column1, column2, ...
// FROM table_name;

$sql = "
    SELECT id, name, height, type
    FROM trees
    -- WHERE type height > 10
     ORDER BY height DESC
    -- LIMIT 2,3
";
    //SELECT * kad visi stulpeliai, nebereikia issivardinti
    //limit nuo iki
    // ORDER BY name ASC
    //filteryje vienguba ligybe, prikyrime


$stmt = $pdo->query($sql); //gaunam statmenta(tam tikras db atsakymo formatas, kuri reikia issilukstenti)

$trees = $stmt->fetchAll(); //gausim masyva, nes visruj pakonfiginom 12eilute

// echo '<pre>';
// print_r($trees);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maria Crud Trees</title>
<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
       
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
       
        tr:hover {
            background-color: #f5f5f5;
        }
       
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>




<body>
    <h1>Trees</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Height</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trees as $tree) : ?>
                <tr>
                    <td><?php echo $tree['id']; ?></td>
                    <td><?php echo $tree['name']; ?></td>
                    <td><?php echo $tree['height']; ?></td>
                    <td><?php echo $tree['type']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
   
</body>
</html>

<!-- db atiduoda duomenis taip kaip jai patogiau, jei nenurodome kaip norime rusiuoti, ir duoda kaip nori -->