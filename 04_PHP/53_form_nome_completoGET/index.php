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
    <form action="" method="GET">
        <input type="text" name="fname" placeholder="fname"><br>
        <input type="text" name="lname" placeholder="lname"><br>
        <input type="submit" value="submit">
    </form>
</body>

<?php
if (isset($_GET["fname"]) && isset($_GET["lname"])) {

    echo "Nome completo: ";
    echo "$_GET[fname]" . " ";
    echo "$_GET[lname]<br>";
}
?>

</html>