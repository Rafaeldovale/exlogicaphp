<?php
/*46) Crie um programa que calcule e mostre na tela o resultado da soma entre 6 +
8 + 10 + 12 + 14 + ... + 98 + 100.*/

$i = 0;
$cont=6;

while($cont < 100){
    //secho $cont.'<br>';
    $i = $i + $cont;
    $cont = $cont + 2;
}
echo $i;
