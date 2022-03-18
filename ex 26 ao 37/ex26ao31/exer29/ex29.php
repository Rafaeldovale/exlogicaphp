<?php
/*29) Desenvolva um programa que leia o nome de um funcionário,
 seu salário,
quantos anos ele trabalha na empresa e mostre seu novo salário, reajustado de
acordo com a tabela a seguir:
 - Até 3 anos de empresa: aumento de 3%
 - entre 3 e 10 anos: aumento de 12.5%
 - 10 anos ou mais: aumento de 20%*/

 $nome = $_POST['nome'];
 $salario = $_POST['salario'];
 $tempo = $_POST['tempo']; //tempo trabalhado


if($tempo < 3){
    $aumento = ($salario * 0.03)+$salario;
    echo "Olá $nome, como ja trabalha aqui por $tempo anos. 
    Terá um reajuste no seu salário que ficará em R$ $aumento";
}elseif ($tempo>=3 && $tempo <10){
    $aumento = ($salario * 0.125) + $salario;
    echo "Olá $nome, como ja trabalha aqui por $tempo anos. 
    Terá um reajuste no seu salário que ficará em R$ $aumento";
}else{
    $aumento =($salario * 0.2) + $salario;
    echo "Olá $nome, como ja trabalha aqui por $tempo anos. 
    Terá um reajuste no seu salário que ficará em R$ $aumento";
}
 