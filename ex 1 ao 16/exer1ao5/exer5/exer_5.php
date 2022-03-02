<?php
$notaA = $_POST['nota1'];
$notaB = $_POST['nota2'];

$resul = ($notaA + $notaB)/2;

echo "A média entre $notaA e $notaB é igual a $resul";


echo"<br><hr><br>";

class Media{
    public $notaA;
    public $notaB;

    function __construct($notaA, $notaB){
        echo 'Recebendo as notas '. $notaA .' + '. $notaB;
        $this->notaA = $notaA;
        $this->notaB = $notaB;
    }
    public function pegarMedia(){
        return ($this->notaA + $this->notaB)/2;
    }
}
$NovaMedia = new Media($notaA, $notaB);
echo "  <br>A sua média é: " . $NovaMedia->pegarMedia();

