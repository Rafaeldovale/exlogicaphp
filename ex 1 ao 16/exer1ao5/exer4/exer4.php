<?php
$valorA = $_POST['valor1'];
$valorB = $_POST['valor2'];

$resultado = $valorA + $valorB;

echo "A soma entre $valorA e $valorB é igual $resultado";

echo "<br><hr><br>";

class Soma{
    public $valorA;
    public $valorB;

    function __construct($valorA, $valorB)
    {
        echo 'Recebendo valores '. $valorA .' e '.$valorB;
        $this->valorA = $valorA;
        $this->valorB = $valorB;
    }
    public function Somar(){
        return ($this->valorA + $this->valorB);
    }
}
$NovaSoma = new Soma($valorA, $valorB);
echo '<br> A soma entre os valores é = ' . $NovaSoma->Somar();