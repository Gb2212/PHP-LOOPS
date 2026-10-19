<?php
$numero = (int) readline("Digite o numero: ");
$fatorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $fatorial *= $i; 
}

echo "O fatorial é: " . $fatorial;






?>