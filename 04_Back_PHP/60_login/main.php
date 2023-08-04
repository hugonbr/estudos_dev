<?php
require_once 'db_config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    // Banco de Dados
    
    // echo $_POST["login"] . "<br>";
    
    // var_dump($_REQUEST);
    // var_dump($_SERVER["REQUEST_METHOD"]);
    
    var_dump($_POST);

    if (isset($_POST["login"]) && isset($_POST["senha"]) && !empty($_POST["login"]) && !empty($_POST["senha"])) {
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        // echo "teste";
        // echo $_POST["login"] . "<br>";
        // echo $_POST["senha"] . "<br>";
    
        // echo "teste<br>";
    
        // Consulta SQL para verificar se o usuário existe e a senha está correta
        $sql = "SELECT * FROM usuario WHERE login = :login AND senha = :senha";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        // echo "teste<br>";
    
        // Verifica se encontrou um registro correspondente
        if ($stmt->rowCount() == 1) {
            // Login bem-sucedido
            echo "<p style='color:green;'>Login bem-sucedido! Bem-vindo, " . $login . "</p>";
        } else {
            // Login falhou
            echo "<p style='color:red;'>Nome de usuário ou senha inválidos!</p>";
        }

    } else {
        echo "deu erro";
    }

    // if ($_POST["login"] === "hugonbr" && $_POST["senha"] === "123") {
    //     echo "<p style='color:green;'>welcome</p>";
    // } else {
    //     echo "<p style='color:red;'>error</p>";
    // }
    ?>

    <a href="/index.php">sair</a>

</body>

</html>