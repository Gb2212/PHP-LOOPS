<?php
$senha=(int) readline("Digite o numero secreto:");

    while($senha!=22){
      if($senha<22){
        echo"O numero é menor que o correto\n";
      }
      elseif($senha>22){
        echo "O número é maior que o correto\n";
      }
    $senha=(int) readline("Digite o numero secreto:");

    }
     echo "Parabéns! Você acertou.";
    
     






?>