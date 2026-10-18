<?php
$numero= (int) readline("Digite um número:");
$fatorial=1;

for($i=1;$i<=$numero;$i++){
    $fatorial*=$i;
}

echo"O fatorial de $numero é: $fatorial";


?>