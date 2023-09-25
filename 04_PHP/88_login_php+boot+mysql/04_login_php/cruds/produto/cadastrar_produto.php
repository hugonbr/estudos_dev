<?php
// Start the session
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../../index.php");
    die();
}
?>
<?php
if (isset($_POST['id'], $_POST['nome'], $_POST['quantidade'], $_POST['preco'])) {
    //var_dump($_GET);
    echo '<br>';
    //var_dump($_POST);
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];

    require('../../database/db_config.php');

    $sql = "INSERT INTO produto (id, nome, quantidade, preco) VALUES (NULL,'$nome', '$quantidade', '$preco')";
    // echo '<br>';
    // var_dump($sql);
    // echo '<br>';
    try {

        // Prepare statement
        $stmt = $pdo->prepare($sql);

        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        // echo "UPDATED successfully";
        // echo '<div class="text-center">';
        // echo '<span class="alert alert-success text-center mb-3">Os dados foram atualizados!</span>';
        // echo '</div>';
        header("Location: listar_produtos.php?&id={$id}");
        die();
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
?>
<?php
require('template/header.php');
// require('../../template/header.php');
//var_dump($_GET);
// echo '<h3 class="text-center">vamos EDITAR aqui o id: ' . $_GET['id'] . ';Nome:' . $_GET['nome'] . ';. Confira a URL</h3>';
?>
<div class="text-center">
    <div style="margin: 2% 25% 2% 25%;">
        <div class="mt-2 mb-4">
            <h2>Editar Produto</h2>
        </div>
        <form action="" method="POST">
            <div class="form-floating mb-3">
                <input class="form-control" id="inputNome" type="text" placeholder="Nome" name="nome" required>
                <label for="inputNome">Nome</label>
            </div>
            <div class="col-md-12">
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputPreco" type="number" step=".01" placeholder="Preço" name="id" required readonly>
                    <label for="inputPreco">ID</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="inputQuantidade" type="number" placeholder="Quantidade" name="quantidade" required>
                        <label for="inputQuantidade">Quantidade</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="inputPreco" type="number" step=".01" placeholder="Preço" name="preco" required>
                        <label for="inputPreco">Preço</label>
                    </div>
                </div>

            </div>
            <div class="mt-2 mb-4">
                <!-- <button class="btn btn-primary" type="submit"> <a href="../index.html">Create
                                            Account</a></button> -->
                <a class="btn btn-danger" href="listar_produtos.php"> Cancelar </a>
                <button class="btn btn-success" type="submit"> Salvar </button>
            </div>
        </form>
    </div>
</div>

<?php
//ajuda a encerrar o footer;
echo '</div>
</main>';
require('template/footer.php');
