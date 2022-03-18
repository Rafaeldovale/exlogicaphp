<?php
/*36) Um programa de vida saudável quer dar pontos atividades físicas que podem
ser trocados por dinheiro. O sistema funciona assim:
 - Cada hora de atividade física no mês vale pontos
 - até 10h de atividade no mês: ganha 2 pontos por hora
 - de 10h até 20h de atividade no mês: ganha 5 pontos por hora
 - acima de 20h de atividade no mês: ganha 10 pontos por hora
 - A cada ponto ganho, o cliente fatura R$0,05 (5 centavos) */

 $horas = $_POST['horas'];

 $pt1 = $horas *2;
 $pt2 = $horas *5;
 $pt3 = $horas *10;
 $premio = $horas * 0.05;
 if ($horas < 10){
     echo "Você ganhou ".$pt1."pts por hora e com isso
     ganhou R$$premio por ponto conquistado";
 }elseif($horas >=10 && $horas < 20){
     echo "Você ganhou ".$pt2."pts por hora e com isso
     ganhou R$$premio por ponto conquistado";
 }else{
     echo "Você ganhou ".$pt3."pts por hora e com isso
     ganhou R$$premio por ponto conquistado";
 }