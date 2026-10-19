<?php 
$somanotas=0;
$i=1;

while($i<=5){
    $notaaluno=(float) readline("Digite a nota do aluno:");
    $somanotas+=$notaaluno;
    $i+=1;
}

echo "A soma das notas é:$somanotas";








?>