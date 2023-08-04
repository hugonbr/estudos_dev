<?php
echo "MAX INT" . PHP_INT_MAX . "\n"; //The largest integer supported
echo "MIN INT" . PHP_INT_MIN . "\n"; //The smallest integer supported
echo "SIZE INT" . PHP_INT_SIZE . "\n"; //The size of an integer in bytes

$teste = 7;
$outro = 7;

echo is_int($teste) . "\n";
echo is_int($outro) . "\n";
?>