<?php
/*47) Desenvolva um aplicativo que mostre na tela o resultado da expressão 500 +
450 + 400 + 350 + 300 + ... + 50 + 0*/

$cont = 500;

$i = 0;

while($cont >= 0){
    echo $cont.'<br>';
    $i = $i + $cont;
    $cont = $cont - 50;
}