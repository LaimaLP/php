<?php

namespace App\DB;

use App\DB\DataBase;
use PDO;

class MariaBase implements DataBase
{
    private $data, $pdo, $table, $stmt;

    public function __construct($table)
    {
        $host = '127.0.0.1'; //'localhost'
        $db   = 'forest'; //duomenu bases pavadinimas 
        $user = 'root'; //useris php myAdmin 
        $pass = ''; //slapiko nera
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [ //standartine konfiguracija
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //masyvo indeksas masyvo reiksme
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $this->pdo = new PDO($dsn, $user, $pass, $options);
        $this->table = $table;
    }


    public function create(object $data): int //situos data gaunam is creato
    {
        $sql = "
        INSERT INTO {$this->table} (name, color, size)
        VALUES (?, ?, ?);
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$data->name, $data->color, $data->size]);
        return $this->pdo->lastInsertId();
    }



    public function update(int $id, object $data): bool
    {
        $sql = "
        UPDATE {$this->table}
        SET name = ?, color = ?, size = ?
        WHERE id = ?
    ";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$data->name, $data->color, $data->size]);
    }

    public function delete(int $id): bool
    {
        $sql = "
        UPDATE {$this->table}
        WHERE id = ?
    ";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function show(int $id): object
    {
        $sql = "
        SELECT *
        FROM {$this->table}
    ";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function showAll(): array
    {
        $sql = "
    SELECT *
    FROM {$this->table}
";

      $stmt =   $this->pdo->query($sql);

        return $stmt->fetchAll();
    }
}
