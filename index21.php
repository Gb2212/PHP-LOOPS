<?php
$consumototal=0;
$diasdasemana=7;

for($i=1;$i<=$diasdasemana;$i++){
    $consumodia=(int) readline("Digite o consumo de agua do dia $i(em litros):\n");
    $consumototal+=$consumodia;
}

echo"O consumo total da semana, em litros, foi de: $consumototal";



?>