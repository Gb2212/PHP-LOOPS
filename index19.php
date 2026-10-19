<?php
$soma = 0; 

for ($i = 1; $i <= 5; $i++) {
    $nota = (int) readline("Digite a nota do aluno $i: ");
    $soma += $nota; 
}

$media = $soma / 5;

echo "A média da turma é: $media\n";
?>