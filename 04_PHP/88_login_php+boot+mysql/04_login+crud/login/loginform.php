<?php
session_start();
session_destroy();
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
                                            <input id="login" class="form-control" id="inputEmail" name="login" type="text" value="hugonbr" placeholder="name@example.com" required />
                                            <label for="inputEmail">Usuário</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input id="senha" class="form-control" id="inputPassword" name="senha" type="password" value="000" placeholder="Password" required />
                                            <label for="inputPassword">Senha</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input id="show" class="form-check-input" type="checkbox" onclick="mostrar()" value="" />
                                            <label class="form-check-label pass-disable-text" for="show">Mostrar
                                                Senha</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="#">Esqueci a minha senha</a>
                                            <button type="submit" class="btn btn-primary">
                                                Entrar
                                            </button>
                                            <!-- <a class="btn btn-primary" href="index.html">Entrar</a> -->
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div>
                                        <a href="#">Cadastrar uma conta</a>
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