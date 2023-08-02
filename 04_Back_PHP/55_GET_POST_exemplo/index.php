<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET e POST</title>
    <style>
    * {
        text-align: center;
        font-size: 1.5rem;
    }

    form {
        margin-top: 4rem;
    }
    </style>
</head>

<body>
    <form action="index.php" method="POST">
        <label for="username">username:</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">password:</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" name="submit" value="login">
    </form>

    <?php

    // if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    //     if (!empty($_GET["username"]) || !empty($_GET["password"])) {
    //         echo "username: " . $_GET["username"] . "<br>";
    //         echo "password: " . $_GET["password"] . "<br>";
    //     } else {
    //         echo "Dados inválidos, tente novamente";
    //     }
    // }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_POST["username"]) || !empty($_POST["password"])) {
            echo "username: " . $_POST["username"] . "<br>";
            echo "password: " . $_POST["password"] . "<br>";
            if ($_POST["username"] === "admin" && $_POST["password"] === "1234") {
                echo '<p style="color: green">bem-vindo admin</p>';
            } else {
                echo '<p style="color: red">usuário ou senha incorretos</p>';
            }
        } else {
            echo '<p style="color: red">Dados inválidos, tente novamente</p>';
        }
    }
    ?>
</body>

</html>