<!--44) Crie um algoritmo que leia o valor inicial da contagem, o valor final e o
incremento, mostrando em seguida todos os valores no intervalo:
Ex: Digite o primeiro Valor: 3
Digite o último Valor: 10
Digite o incremento: 2
Contagem: 3 5 7 9 Acabou!-->

<?php
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$passo= $_POST['passo'];


/*if($valor1 > $valor2){
    $passo =$valor1;
    $valor1 = $valor2;
    $valor2 = $passo;
}
*/
while($valor1 < $valor2){
    $valor1 = $valor1 + $passo;
    echo $valor1.'<br>';
}
echo "Acabou!";

?>