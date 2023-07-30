<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <style>
    * {
        text-align: center;
        margin-top: 2rem;
        font-size: 2rem;
    }
    </style>
</head>

<body>
    <?php
            for ($i=3;$i>0;$i--) {
                echo "$i...";
            }
            echo "<br>Oi :)! teste<br>";
            print_r(PDO::getAvailableDrivers());
        ?>

    <?php
            // phpinfo();
        ?>
</body>

</html>