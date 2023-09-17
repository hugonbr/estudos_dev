<?php
// Start the session
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login/loginform.php");
    die();
}
?>
<?php
require('template/header.php');
require('database/db_config.php');

$sql = "SELECT COUNT(id) FROM produto";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$contprod = $stmt->fetchColumn();

?>
<div class="row">
    <div class="col-xl-6 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
                <h4>Produtos: <?php echo $contprod ?></h4>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="cruds/produto/listar_produtos.php">Ver Detalhes</a>
                <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <h4>Funcionários</h4>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="cruds/funcionario/listar_funcionarios.php">Ver
                    Detalhes</a>
                <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- teste user:admin -->
<?php
// echo '<h2 class = "text-center">';
// echo 'Usuário da sessão: ' . $_SESSION["user"];
// echo '</h2>';
?>
</main>
<?php
require('template/footer.php');
?>