<?php
$numero=readline("Digite um número:");

echo"Tabuada do $numero:\n";

$i=1;

while($i<=10){
    $resultado=$numero*$i;
    echo"$numero x $i=$resultado\n";
    $i+=1;
}




?>