<?php
/*
3) Crie um programa que leia o nome e o salário de um funcionário, mostrando no
final uma mensagem.
Ex:
Nome do Funcionário: Maria do Carmo
Salário: 1850,45
O funcionário Maria do Carmo tem um salário de R$1850,45 em Junho.
*/

$nome = $_POST['nome'];
$salario = $_POST['salario'];

echo "O funcinário $nome tem um salário de R$ $salario em Junho.";

echo "<br><hr><br>";

class Funcionario{
    public $nome;
    public $salario;

    function __construct($nome,$salario){
        echo 'Recebendo dados<br>';
        $this->nome = $nome;
        $this->salario = $salario;
        
    }
    public function exebir(){
        echo "O funcinário {$this->nome} tem um salário de R$ {$this->salario} em Junho.";

    }
}
$funcionarioA = new Funcionario($nome,$salario);
$funcionarioA->exebir();
?>
