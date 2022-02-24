<?php

$dia = $_POST['Dias'];
$salarioDia =  8 *25;
$totalReceber = $dia * $salarioDia;

echo "Você trabalhou por $dia dias e então receberá  R$$totalReceber no seu salário";