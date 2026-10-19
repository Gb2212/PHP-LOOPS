<?php
$saque=(int) readline("Digite o valor do saque:");
$possivel = false;
$qtd10 = 0;
$qtd2 = 0;

if($saque<=0 or $saque %2!=0){
    echo"O saque não pode ser realizado com o valor exato.\n";
}
 else{
    $max10 = (int)($saque / 10);

    for ($i = $max10; $i >= 0; $i--) {
        $restante= $saque - ($i * 10);
    
        if ($restante % 2 == 0) {
            $qtd10 = $i;
            $qtd2 = (int)($restante / 2);
            $possivel = true;
            break;
        }
 }

 if ($possivel) {
        echo "Saque realizado com sucesso!\n";
        echo "Notas de R$ 10,00: " . $qtd10 . "\n";
        echo "Notas de R$ 2,00: " . $qtd2 . "\n";
    } else {
        echo "O saque não pode ser realizado com o valor exato.\n";
    }
}
 


?>