<?php
/*41) Desenvolva um programa que mostre na tela a seguinte contagem:
100 95 90 85 80 ... 0 Acabou!*/

$i = 105;
while($i > 0){
    echo ($i -= 5).'<br>';
}