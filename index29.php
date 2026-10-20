<?php
$pedidos=8;
$fretegratis=0;
$frete15=0;
$frete25=0;

for($i=1;$i<=$pedidos;$i++){
    $valorcompra=(int) readline("Digite o valor da compra do pedido $i:\n");

    if($valorcompra>=300){
        echo"Frete gratis para compra $i\n";
        $fretegratis++;
    }
    elseif($valorcompra>=150 and $valorcompra<300){
        echo"Frete de 15 reais para compra $i\n";
        $frete15++;
    }
    else{
        echo"Frete de 25 reais para compra $i\n";
        $frete25++;
    }

}

echo"Frete Gratis:$fretegratis\n";
echo"Frete de R$ 15: $frete15\n";
echo"Frete de R$ 25: $frete25\n";






?>