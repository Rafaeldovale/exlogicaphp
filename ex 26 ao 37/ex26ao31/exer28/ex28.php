<?php
/*28) Faça um programa que leia a largura e o comprimento de um terreno
retangular, calculando e mostrando a sua área em m². O programa também
devemostrar a classificação desse terreno, de acordo com a lista abaixo:
 - Abaixo de 100m² = TERRENO POPULAR
 - Entre 100m² e 500m² = TERRENO MASTER
 - Acima de 500m² = TERRENO VIP*/

 $comprimento = $_POST['comprimento'];
 $largura = $_POST['largura'];

 $medida = $comprimento * $largura;

 if($medida < 100){
     echo "TERRENO POPULAR. medida = $medida m²";
 }elseif($medida>=100 && $medida<500){
     echo "TERRENO MASTER. medida = $medida m²";
 }else{
     echo "TERRENO VIP. medida = $medida m²";
 }