<?php
/*33) Escreva um programa para aprovar ou não o empréstimo
 bancário para a compra de uma casa. O programa vai perguntar
o valor da casa, o salário do comprador e em quantos anos ele 
vai pagar. Calcule o valor da prestação mensal, sabendo que
ela não pode exceder 30% do salário ou então o empréstimo 
será negado.*/

$casa = $_POST['casa'];
$salario = $_POST['salario'];
$parcelas = $_POST['parcelas'];


$valorMensal = $casa / $parcelas;
$porcentoSalario = $salario * 0.3;

//echo "$parcelas...$valorMensal...$emprestimo"; 

if ($valorMensal > $porcentoSalario ){
    echo "Você não pode comprometer o 30% do seu salário<br>
    Valor correspondente dos 30% do salario = R$".$porcentoSalario.
    "<br>O Valor da mensalidade =R$".$valorMensal;
}else{
    echo "Valor da mensalidade = R$".$valorMensal." <br>
    Seu salário R$".$salario." entra na margem de emprestimo<br>
    Valor correspondente 30% do seu salário é = R$".$porcentoSalario;
}