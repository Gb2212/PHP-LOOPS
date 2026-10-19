<?php
$numero = (int) readline("Digite o número aqui: ");

echo "Os 10 primeiros múltiplos de {$numero} são:\n";

for ($i = 1; $i <= 10; $i++) {
    $multiplo = $numero * $i;
    echo "{$multiplo}\n";
}
?>