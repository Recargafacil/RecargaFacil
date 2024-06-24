<?php
$host = 'mysql8010.site4now.net';
$db   = 'recarga';
$user = 'aaa436_teste01ot';
$pass = '';
$port = "3306";
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dns = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";

// 
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'recarga';
$conexao = mysqli_connect($host, $user, $pass, $db) or die ('Invalid DataBase!');
// 

try {
    $pdo = new \PDO($dns, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Failed To Connect To MYSQL With Pdo!");
    exit();
}
