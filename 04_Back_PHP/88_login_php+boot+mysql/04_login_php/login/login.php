<?php
// Start the session
session_start();
//teste admin
require('../database/db_config.php');

if (isset($_POST["login"]) && isset($_POST["senha"]) && !empty($_POST["login"]) && !empty($_POST["senha"])) {
    $usuario = $_POST["login"];
    $senha = $_POST["senha"];

    // var_dump($_POST);
    echo '<br>';

    // Consulta SQL para verificar se o usuário existe e a senha está correta
    $sql = "SELECT * FROM admin WHERE usuario = :usuario AND senha = :senha";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    //echo "<br>";

    // Verifica se encontrou um regisstro correspondente
    if ($stmt->rowCount() == 1) {
        // Login bem-sucedido
        // echo "<p style='color:green;'>Login bem-sucedido! Bem-vindo, " . $usuario . "</p>";
        $_SESSION["user"] = $usuario;
        header("Location: /index.php");
        exit;
    } else {
        // Login falhou
        // echo "<p style='color:red;'>Nome de usuário ou senha inválidos!</p>";
        echo '<div class="text-center">';
        echo '<span class="alert alert-danger text-center">login ou senha incorretos!</span>';
        echo '</div>';
    }
} else {
    // echo "deu erro";
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - Sistema WEB</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="bg-gray-200">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 teste">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">
                                        Área de Acesso
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="login.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input id="login" class="form-control" id="inputEmail" name="login"
                                                type="text" value="hugonbr" placeholder="name@example.com" required />
                                            <label for="inputEmail">Usuário</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input id="senha" class="form-control" id="inputPassword" name="senha"
                                                type="text" value="000" placeholder="Password" required />
                                            <label for="inputPassword">Senha</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input id="show" class="form-check-input" type="checkbox"
                                                onclick="mostrar()" value="" />
                                            <label class="form-check-label pass-disable-text" for="show">Mostrar
                                                Senha</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Esqueci a minha senha</a>
                                            <button type="submit" class="btn btn-primary">
                                                Entrar
                                            </button>
                                            <!-- <a class="btn btn-primary" href="index.html">Entrar</a> -->
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div>
                                        <a href="register.html">Cadastrar uma conta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">
                            Copyright &copy; hugonbr 2022
                        </div>
                        <div>
                            <a href="#">Política de Privacidade</a>
                            &middot;
                            <a href="#">Termos &amp; Condições</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="../js/scripts.js"></script>
</body>

</html>