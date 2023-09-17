<?php
$texto = "Hugo";
$inteiro = 9;
$flutuante = 7.47328432;
$booleano = true;
$vetor = array("Fiat", "Ford", "VW");

echo $texto . "\n";
echo $inteiro . "\n";
echo $flutuante . "\n";
echo $booleano . "\n";
var_dump($vetor) . "\n";

class Pessoa
{
    public $nome = "Hugo";

    function oi()
    {
        echo "Oi, meu nome é " . $this->nome . ".\n";
    }
}

$p = new Pessoa();
echo $p->nome . "\n";
echo $p->oi();
echo "teste\n";

$vazio = null;
var_dump($vazio);
?>