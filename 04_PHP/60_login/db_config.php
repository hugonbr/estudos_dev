<?php
$host = 'localhost';
$db_name = 'login_teste_php';
$username = 'root';
$password = '1234';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "BD conectado!<br><br>";
} catch (PDOException $e) {
    die("BD erro: " . $e->getMessage());
}
?>