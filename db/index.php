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
    -- WHERE height > height / 2
    -- ORDER BY height DESC
    -- LIMIT 0, 3
    -- WHERE id = 3
";


$stmt = $pdo->query($sql); //gaunam statmenta(tam tikras db atsakymo formatas, kuri reikia issilukstenti)

$trees = $stmt->fetchAll(); //gausim masyva, nes visruj pakonfiginom 12eilute


    //SELECT * kad visi stulpeliai, nebereikia issivardinti
    //limit nuo iki
    // ORDER BY name ASC
    //filteryje vienguba ligybe, prikyrime

// SELECT AVG(column_name)
// FROM table_name
// WHERE condition;

$sql = "
    SELECT AVG(height) AS average, COUNT(*) AS count
    FROM trees
    ";

$stmt = $pdo->query($sql);


$stat = $stmt->fetch();


$stmt = $pdo->query($sql); 
$stmt = $pdo->query($sql); 

$average = $stmt->fetch(); 

print_r($average)




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maria Crud Trees</title>
<style>
    body{
        font-family:Arial, Helvetica, sans-serif;
        margin:1em 5em;
    }
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
.forms {
            margin-top: 20px;
            display: flex;
        }
        .forms form {
            width: 33%;
            margin-right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 10px;
            box-shadow: 0 0 5px #ccc;
            box-sizing: border-box;
        }
        .forms form input, select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .forms form button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
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


    <div class="forms">
        <form action="http://localhost/backEnd/php/db/store.php" method="post">
            <h2>Plant a tree</h2>
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="height" placeholder="Height">
            <select name="type">
                <option value="0">Pasirinkti<option>
                <option value="lapuotis">Lapuotis<option>
                <option value="spygliuotis">Spygliuotis<option>
                <option value="palme">Palme<option>
            </select>

            <button type="submit">Plant Tree</button>
        </form>
        <form action="http://localhost/backEnd/php/db/destroy.php" method="post">
<h2>Cut a tree</h2>
<input type="text" name="id" placeholder="id">

<button>Delete</button>

        </form>
        <form action="http://localhost/backEnd/php/db/update.php" method="post">
    <h2>Grow a tree</h2>
    <input type="text" name="id" placeholder="id">
    <input type="text" name="height" placeholder="Height">


    <button type="submit">Grow</button>
</form>

    </div>


</body>
</html>

<!-- db atiduoda duomenis taip kaip jai patogiau, jei nenurodome kaip norime rusiuoti, ir duoda kaip nori -->