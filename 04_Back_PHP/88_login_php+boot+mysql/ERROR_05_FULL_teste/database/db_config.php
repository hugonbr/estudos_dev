<?php
$host = 'localhost';
$db_name = 'controle_de_estoque';
$username = 'root';
$password = '1234';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'Bem-vindo ao bd controle_de_estoque';
    // echo '<br>';
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}