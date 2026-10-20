<?php 
$vendastotal=0;
$vendasdiarias=0;

for($i=1;$i<=5;$i++){
    $vendasdiarias=(int) readline("Digite o numero de vendas do dia $i:\n");
    $vendastotal+=$vendasdiarias;
}

echo "O total de vendas do periodo foi: $vendastotal";



?>