<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form nome</title>
    <style>
    * {
        text-align: center;
    }

    body {
        margin-top: 8rem;
    }
    </style>
</head>

<body>
    <form action="" method="POST">
        <label for="fname">Nome: </label>
        <input type="text" name="fname" id="fname"><br>
        <label for="lname">Sobrenome: </label>
        <input type="text" name="lname" id="lname"><br>
        <input type="submit" value="submit">
    </form>
</body>

<?php
echo "Nome completo: ";
echo "$_POST[fname]" . " ";
echo "$_POST[lname]<br>";
?>

</html>