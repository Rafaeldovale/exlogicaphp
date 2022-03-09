<?php 
/*24) Faça um algoritmo que pergunte a distância que um passageiro deseja
percorrer em Km. Calcule o preço da passagem, cobrando R$0.50 por Km para
viagens até 200Km e R$0.45 para viagens mais longas.*/

$distancia = $_POST['distancia'];

$disCurta = $distancia * 0.5;
$disLonga = $distancia * 0.45;

if( $distancia < 200){
    echo "Sua passagem será $disCurta";
}else{
    echo"Sua passagem sera $disLonga";
}

echo"<br><hr><br>";

class Calculo{
    public $distancia;
    public $disCurta ;
    public $disLonga;

    function __construct($distancia, $disCurta, $disLonga){
        echo 'Recebendo as a distancia que vai percorrer '.$distancia.'km';
        $this->distancia = $distancia;
        //$disCurta = $distancia * 0.5;
        $this->disCurta = $disCurta;
        //$disLonga = $distancia * 0.45;
        $this->disLonga= $disLonga;
    }
    public function pegarKM(){
        if( $_POST['distancia'] < 200){
            return $this->disCurta;
        }else{
            return $this->disLonga;
        }
    }
}
$novaDistancia= new Calculo($distancia, $disCurta,$disLonga);
echo "  <br>O valor da passagem será: " . $novaDistancia->pegarKM();
