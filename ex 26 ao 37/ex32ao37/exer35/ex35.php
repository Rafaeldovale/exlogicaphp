<?php
/*35) Uma empresa de aluguel de carros precisa cobrar pelos seus serviços. O
aluguel de um carro custa R$90 por dia para carro popular e R$150 por dia para
carro de luxo. Além disso, o cliente paga por Km percorrido. Faça um programa
que leia o tipo de carro alugado (popular ou luxo), quantos dias de aluguel e
quantos Km foram percorridos. No final mostre o preço a ser pago de acordo com a
tabela a seguir:
 - Carros populares (aluguel de R$90 por dia)
 - Até 100Km percorridos: R$0,20 por Km
 - Acima de 100Km percorridos: R$0,10 por Km
 - Carros de luxo (aluguel de R$150 por dia)
 - Até 200Km percorridos: R$0,30 por Km
 - Acima de 200Km percorridos: R$0,25 por Km*/

 $tipo = $_POST['carro'];
 $kmPercorrido = $_POST['km'];
 $diasalugado = $_POST['diasalugado'];

// echo $tipo;

if ($tipo == 'popular' && $kmPercorrido < 100){
    $valorPopular1 = (($diasalugado * 90) + ($kmPercorrido * 0.2));
    echo $tipo." O valor do alugel foi R$$valorPopular1";

}elseif ($tipo == 'popular' && $kmPercorrido >= 100){
    $valorPopular2 = ($diasalugado * 90) + ($kmPercorrido * 0.1);
    echo $tipo." O valor do alguel foi R$$valorPopular2";

}elseif ($tipo == 'luxo' && $kmPercorrido <100){
    $valorLuxo1 = ($diasalugado * 150) + ($kmPercorrido * 0.3);
    echo $tipo. " O valor do aluguel foi R$$valorLuxo1";

}else{
    $valorLuxo2 = ($diasalugado * 150) +($kmPercorrido * 0.25);
    echo $tipo." O valor do aluguel foi R$$valorLuxo2";
}