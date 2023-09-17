<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste PHP</title>
</head>

<body>
    <?php
    require('db_config.php');
    echo '<br><br>';
    echo 'Produtos:';
    echo '<br><br>';

    // Retrieve tasks from the database
    $stmt = $pdo->query('SELECT * FROM produto');
    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($produtos) {
        foreach ($produtos as $produto) {
            echo $produto['id'] . '|' . $produto['nome'] . '|' . $produto['quantidade'] . '|' . $produto['preco'];
        }
    } else {
        echo 'Nenhum produto encontrado!';
    }
    ?>
</body>

</html>