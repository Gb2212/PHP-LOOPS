<?php
$total=0;
$i=1;

while($i!=0){
    $numeros= (float) readline("Digite um número:");
    if($numeros==0){
        echo "A soma dos numeros é:$total";
    }
    $total+=$numeros;
    
}




?>