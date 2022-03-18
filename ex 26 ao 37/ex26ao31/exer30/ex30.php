<?php
/*30) [DESAFIO] Refaça o algoritmo 25, acrescentando o recurso 
de mostrar que tipo
de triângulo será formado:
 - EQUILÁTERO: todos os lados iguais
 - ISÓSCELES: dois lados iguais
 - ESCALENO: todos os lados diferentes*/

 $retaA = $_POST['A'];
 $retaB = $_POST['B'];
 $retaC = $_POST['C'];

 if( $retaA == $retaB && $retaA == $retaC && $retaB == $retaC){
     echo "EQUILÁTERO: todos os lados iguais";
 }elseif($retaA == $retaB || $retaA == $retaC || $retaC == $retaB){
     echo "ISÓSCELES: dois lados iguais";
 }elseif($retaA != $retaB && $retaA != $retaC && $retaC != $retaB){
     echo "ESCALENO: todos os lados diferentes";
 }