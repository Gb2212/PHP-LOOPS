<?php
$somapares=0;
$somaimpares=0;

for($i=1;$i<=50;$i++){
    if($i%2==0){
        $somapares+=$i;
    }
    else{
        $somaimpares+=$i;
    }
}

echo"Soma de todos os numeros pares de 1 a 50: $somapares\n";
echo"Soma de todos os numeors impares de 1 a 50: $somaimpares\n";



?>