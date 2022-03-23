<?php

/*
45) O programa acima vai ter um problema quando digitarmos o primeiro valor
maior que o último. Resolva esse problema com um código que funcione em qualquer
situação.
*/
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$passo= $_POST['passo'];



while($valor1 > $valor2){
    echo $valor2.'<br>';
    $valor2 = $valor2 + $passo;    
}

while($valor1 < $valor2){
    echo $valor1.'<br>';
    $valor1 = $valor1 + $passo;  
}
echo "Acabou!";

?>