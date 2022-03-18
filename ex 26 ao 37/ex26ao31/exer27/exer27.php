<?php
/*27) Crie um programa que leia duas notas de um aluno e calcule a sua média,
mostrando uma mensagem no final, de acordo com a média atingida:
 - Média até 4.9: REPROVADO
 - Média entre 5.0 e 6.9: RECUPERAÇÃO
 - Média 7.0 ou superior: APROVADO*/

 $nota1 = $_POST['nota1'];
 $nota2 = $_POST['nota2'];

 $media = ($nota1 + $nota2) / 2;

 if($media <= 4.9){
     echo "Reprovado";
 }else if( $media>=5 && $media <=6.9){
     echo "Recuperação";
 }else{
     echo "Aprovado";
 }

 echo "<br><hr><br>";
/*
 class Media{
     public float $nota1;
     public float $nota2;
     private $media;
     public function __construct($nota1, $nota2)
     {
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
     }
     public function pegarMedia(){
        
         return  ($this->nota1 + $this->nota2)/2;
     }
 }
 $novaMedia = new Media($nota1, $nota2);
 echo $novaMedia->pegarMedia();*/