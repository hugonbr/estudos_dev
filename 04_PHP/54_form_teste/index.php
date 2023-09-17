<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h2>Checkboxes</h2>
    <p>The <strong>input type="checkbox"</strong> defines a checkbox:</p>

    <form action="/index.php" method="POST">
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1"> I have a bike</label><br>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
        <label for="vehicle2"> I have a car</label><br>
        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
        <label for="vehicle3"> I have a boat</label><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

<?php
echo "" . $_POST["vehicle1"] . "<br>";
echo "" . $_POST["vehicle2"] . "<br>";
echo "" . $_POST["vehicle3"] . "<br>";
?>

</html>