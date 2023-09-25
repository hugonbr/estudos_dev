<?php
// Start the session
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../../index.php");
    die();
}
?>
<?php
require_once('../../database/db_config.php');
require('template/header.php');
// require('../../template/header.php');
?>
<?php
if (isset($_GET['id'])) {
    echo '<div class="text-center m-4">';
    echo '<span class="alert alert-success text-center mb-3">Os dados foram atualizados! <a href="listar_produtos.php" style="text-decoration: none">[X]</a> </span>';
    echo '</div>';
}
?>
<?php
$sql = "SELECT COUNT(id) FROM produto";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$contprod = $stmt->fetchColumn();
?>
<?php
$possuiProdutos = false;
?>
<div class="d-flex justify-content-between">
    <!-- <a href="listar_produtos.php" style="text-decoration: none"> -->
    <h2>Produtos: <?php echo $contprod ?></h2>
    <!-- </a> -->
    <a href="cadastrar_produto.php" class="btn btn-lg btn-success">Cadastrar</a>
</div>
<!-- <div class="row justify-content-center"> -->
<!-- <div class="col-auto"> -->
<div class="table-responsive mt-2">
    <table class="table table-striped table-bordered text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            <!-- teste PHP BD -->

            <?php
            //require_once('database/db_config.php');
            $stmt = $pdo->query('SELECT * FROM produto');
            // mudar para PDO::FETCH_OBJ
            $produtos = $stmt->fetchAll(PDO::FETCH_OBJ);

            if ($produtos) {
                $possuiProdutos = true;
                foreach ($produtos as $produto) {
                    // echo $produto['id'] . '|' . $produto['nome'] . '|' . $produto['quantidade'] . '|' . $produto['preco'] . '<br>';
                    echo '<tr>';
                    echo "<td>$produto->id</td>";
                    echo "<td>$produto->nome</td>";
                    echo "<td>$produto->quantidade</td>";
                    echo "<td>R$ $produto->preco</td>";
                    echo '<td>
                            <a href="editar_produto.php?id=' . $produto->id . '&nome=' . $produto->nome . '&quantidade=' . $produto->quantidade . '&preco=' . $produto->preco . '" class="btn btn-warning">
                                Editar
                            </a>
                            <a href="javascript:void(0);" onclick="confirmDelete(' . $produto->id . ');" class="btn btn-danger">
                                Deletar
                            </a>
                          </td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>
</div>
<?php
if (!$possuiProdutos) {
    echo '<div class="text-center m-4">';
    echo '<h3 class="alert alert-danger text-center mb-3">Nenhum Produto cadastrado no sistema!</h3>';
    echo '</div>';
}
?>

<!-- </div> -->
<!-- </div> -->
</div>
</main>

<script>
    function confirmDelete(productId) {
        var confirmDelete = confirm("Tem certeza de que deseja remover este produto?");

        if (confirmDelete) {
            // Se o usuário confirmar, redirecione para a página de exclusão
            window.location.href = "deletar_produto.php?id=" + productId;
        }
        // Se o usuário cancelar, nada acontece
    }
</script>
<?php
require('template/footer.php');
?>