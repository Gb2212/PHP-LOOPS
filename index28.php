<?php
$quantiadedelotes=10;
$lotepequeno=0;
$lotemedio=0;
$lotegrande=0;

for($i=1;$i<=$quantiadedelotes;$i++){
    $pesomedio=(int) readline("Digite o peso medio da fruta em gramas do lote $i:\n");

    if($pesomedio<100){
        $lotepequeno++;
    }
    elseif($pesomedio>=100 and $pesomedio<=200){
          $lotemedio++;
    }
    else{
        $lotegrande++;
    }
}

echo"A quantidade de lotes pequenos é: $lotepequeno\n";
echo"A quantidade de lotes médios é: $lotemedio\n";
echo"A quantidade de lotes grandes é: $lotegrande\n";


?>