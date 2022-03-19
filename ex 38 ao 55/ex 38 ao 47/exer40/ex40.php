<?php
/*40) Crie um aplicativo que mostre na tela a seguinte contagem:
0 3 6 9 12 15 18 Acabou!*/

$i = 0;

while($i < 18){
    echo ($i += 3)  .'<br>';
}