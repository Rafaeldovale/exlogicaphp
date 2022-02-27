<?php
/*10) Faça um algoritmo que leia a largura e altura de uma parede, calcule e
mostre a área a ser pintada e a quantidade de tinta necessária para o serviço,
sabendo que cada litro de tinta pinta uma área de 2metros quadrados.*/

$largura = $_POST['largura'];
$altura = $_POST['altura'];

$tinta = ($largura*$altura)* 0.5;

echo "Para cada m² de parede, você utilizará $tinta L de tinta";