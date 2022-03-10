<?php
/*26) Escreva um algoritmo que leia dois números inteiros e compare-os, mostrando
na tela uma das mensagens abaixo:
 - O primeiro valor é o maior
 - O segundo valor é o maior
 - Não existe valor maior, os dois são iguais*/

 $valor1 = $_POST['valor1'];
 $valor2 = $_POST['valor2'];

 if($valor1 > $valor2){
     echo " O primeiro valor é maior";
 }else if($valor1 < $valor2){
     echo "O segundo valor é maior";
 }else{
     echo "Não existe valor maior, os dois são iguais";
 }