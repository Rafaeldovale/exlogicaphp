<?php

/*13) Faça um algoritmo que leia o salário de um funcionário, calcule e mostre o
seu novo salário, com 15% de aumento.*/

$salario = $_POST['salario'];

$novoSalario = ($salario * 0.15) + $salario;

echo "Seu salário atual é de R$".$salario." teve um reajuste de 15% e seu novo salario é de R$".$novoSalario;
