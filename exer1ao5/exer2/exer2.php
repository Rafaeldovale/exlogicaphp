<?php
/*
2) Faça um programa que leia o nome de uma pessoa e mostre uma mensagem de boasvindas para ela:
Ex:
Qual é o seu nome? João da Silva
Olá João da Silva, é um prazer te conhecer!
*/
$nome = $_POST['nome'];

//echo "Olá $nome, é um prazer em te conhecer!";

class Pessoa {
    public $nome;
    
    function __construct($novoNome){
        echo 'nome:<br>';
        $this->nome = $novoNome;
       
    }
    /*function __destruct(){
        echo 'fim!<br>';
    }*/

    public function apresentar(){
        echo "Olá {$this->nome}, é um prazer em te conhecer<br>";
    }
  
}
$pessoaA = new Pessoa($nome);
$pessoaA->apresentar();
//unset($pessoaA);