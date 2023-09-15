<?php
// Start the session
session_start();
//teste admin
require('../database/db_config.php');
require('login_template.php');

if (isset($_POST["login"]) && isset($_POST["senha"]) && !empty($_POST["login"]) && !empty($_POST["senha"])) {
    $usuario = $_POST["login"];
    $senha = $_POST["senha"];

    var_dump($_POST);

    // Consulta SQL para verificar se o usuário existe e a senha está correta
    $sql = "SELECT * FROM admin WHERE usuario = :usuario AND senha = :senha";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    // echo "teste<br>";

    // Verifica se encontrou um regisstro correspondente
    if ($stmt->rowCount() == 1) {
        // Login bem-sucedido
        echo "<p style='color:green;'>Login bem-sucedido! Bem-vindo, " . $usuario . "</p>";
        $_SESSION["user"] = $usuario;
        header("Location: ../index.php");
        exit;
    } else {
        // Login falhou
        echo "<p style='color:red;'>Nome de usuário ou senha inválidos!</p>";
    }
} else {
    // echo "deu erro";
}
