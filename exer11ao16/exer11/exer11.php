<?php
/*11) Desenvolva uma lógica que leia os valores de A, B e C de uma equação do
segundo grau e mostre o valor de Delta.*/
$a =$_POST['A'];
$b = $_POST['B'];
$c = $_POST['C'];

$result = ($b*$b)-(4*$a*$c);

echo "O valor de Delta será $result";