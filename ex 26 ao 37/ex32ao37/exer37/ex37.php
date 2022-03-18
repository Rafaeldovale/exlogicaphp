<?php
/*37) Uma empresa precisa reajustar o salário dos seus funcionários, dando um
aumento de acordo com alguns fatores. Faça um programa que leia o salário atual,
o gênero do funcionário e há quantos anos esse funcionário trabalha na empresa.
No final, mostre o seu novo salário, baseado na tabela a seguir:
- Mulheres
 - menos de 15 anos de empresa: +5%
 - de 15 até 20 anos de empresa: +12%
 - mais de 20 anos de empresa: +23%
- Homens
 - menos de 20 anos de empresa: +3%
 - de 20 até 30 anos de empresa: +13%
 - mais de 30 anos de empresa: +25%*/

 $genero = $_POST['sex'];
 $salario = $_POST['salario'];
 $tempoTrabalho = $_POST['tempo'];

 if($genero == 'Feminino' && $tempoTrabalho <15 ){
    $reajuste1 = ($salario * 0.05)+$salario;
    echo "Seu novo salário será R$$reajuste1";

 }elseif($genero == 'Feminino' && ($tempoTrabalho >=15 && $tempoTrabalho < 20 )){
    $reajuste2 = ($salario * 0.12) + $salario;
    echo "Seu novo salário será R$$reajuste2";

 }elseif($genero == 'Feminino' && $tempoTrabalho >= 20){
    $reajuste3 = ($salario * 0.23) + $salario;
    echo "Seu novo salário será R$$reajuste3";

 }elseif($genero == 'Masculino' && $tempoTrabalho < 20){
    $reajuste4 = ($salario * 0.03) + $salario;
    echo "Seu novo salário será R$$reajuste4";

 }elseif($genero == 'Masculino' && ($tempoTrabalho>= 20 && $tempoTrabalho < 30)){
    $reajuste5 = ($salario * 0.13) + $salario;
    echo "Seu novo salário será R$$reajuste5";
 }elseif($genero == 'Masculino' && $tempoTrabalho >= 30){
     $reajuste6 = ($salario * 0.25)+$salario;
     echo "Seu novo salario será R$$reajuste6";
 }