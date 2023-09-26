<?php

// echo '<h1 class="text-center">vamos DELETAR aqui! Confira a URL</h1>';

// fazer o deletar e redirecionar para a listagem
?>
<?php
// Start the session
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../../index.php");
    die();
}
?>

<?php
var_dump($_GET['id']);

$id = $_GET['id'];

var_dump($id);

require('../../database/db_config.php');

$sql = "DELETE FROM produto WHERE produto.id = $id";

// $sql = "DELETE FROM MyGuests WHERE id=3";

try {
    $pdo->exec($sql);
    header("Location: listar_produtos.php?&id={$id}");
    die();
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

?>