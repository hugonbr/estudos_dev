<?php
// Start the session
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../../index.php");
    die();
}
?>
<?php
require('template/header.php');
// require('../../template/header.php');
?>
<div class="d-flex justify-content-between">
    <h2>Produtos</h2>
    <button type="button" class="btn btn-success">
        Cadastrar
    </button>
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
            require_once('../../database/db_config.php');
            $stmt = $pdo->query('SELECT * FROM produto');
            // mudar para PDO::FETCH_OBJ
            $produtos = $stmt->fetchAll(PDO::FETCH_OBJ);

            if ($produtos) {
                foreach ($produtos as $produto) {
                    // echo $produto['id'] . '|' . $produto['nome'] . '|' . $produto['quantidade'] . '|' . $produto['preco'] . '<br>';
                    echo '<tr>';
                    echo "<td>{$produto->id}</td>";
                    echo "<td>{$produto->nome}</td>";
                    echo "<td>{$produto->quantidade}</td>";
                    echo "<td>{$produto->preco}</td>";
                    echo '<td>
                            <button type="button" class="btn btn-warning">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger">
                                Remover
                            </button>
                          </td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>
</div>
<!-- </div> -->
<!-- </div> -->
</div>
</main>
<?php
require('template/footer.php');
?>