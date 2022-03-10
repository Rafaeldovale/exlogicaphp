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
/*
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

*/
/*
class Program
{
    public Request $request;
    public Ticket $ticket;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->ticket = new Ticket($request->getField("distance"));
    }

    public function execute(): void
    {
        // TODO: implement...
    }
}

class Ticket
{
    public float $distance;
    public float $price;

    public function __construct(float $distanceInKilometers)
    {
        $this->distance = $distanceInKilometers;
    }

    public function calculatePrice(): float
    {
        // TODO: implement...
        return 0;
    }
}

class Request
{
    public array $data;

    public function __construct()
    {
        /**
         * Mesmo que pegar o $_POST inteiro
         * só que tratando os dados antes usando o filter_input.
         
        $this->data = filter_input_array(INPUT_POST);
    }

    public function getField(string $field)
    {
        return $this->data[$field];
    }
}*/

class Program
{
    public Request $request;
    public Ticket $ticket;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $distance = $request->getField("distancia") ?? 0;
        $this->ticket = new Ticket($distance);
    }

    public function execute(): void
    {
        $price = $this->ticket->calculatePrice();
        echo "<br />O valor da passagem : $price.";
    }
}

class Ticket
{
    public float $distance;
    public float $price;

    public function __construct(float $distanceInKilometers)
    {
        $this->distance = $distanceInKilometers;
    }

    public function calculatePrice(): float
    {
        $this->price = $this->distance < 200 ? $this->distance * 0.5 : $this->distance * 0.45;
        
        return $this->price;
    }
}

class Request
{
    public array $data;

    public function __construct()
    {
        /**
         * Mesmo que pegar o $_POST inteiro
         * só que tratando os dados antes usando o filter_input.
         */
        $this->data = filter_input_array(INPUT_POST) ?? [];
    }

    public function getField(string $field)
    {
        return $this->data[$field] ?? null;
    }
}

$program = new Program(new Request());
$program->execute();