<?php
/*
18) Faça um programa que leia o ano de nascimento de uma pessoa, calcule a idade
dela e depois mostre se ela pode ou não votar.
*/

$anoNas = $_POST['nascimento'];

$calc = 2022 - $anoNas;

if($calc >= 18 && $calc <= 65){
    echo "Voce pode votar pela sua idade $calc anos";
}else{
    echo "Você não pode votar sua idade não é permitida $calc anos";
}