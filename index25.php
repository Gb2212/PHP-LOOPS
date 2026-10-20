<?php
$temperaturas=0;
$diasdasemana=7;
$maior=0;

for($i=1;$i<=$diasdasemana;$i++){
    $temperaturadia=(int) readline("Digite a temperatura do dia $i:\n");
    $temperaturas+=$temperaturadia;

    if($temperaturadia>$maior){
        $maior=$temperaturadia;
    }
}
$temperaturamedia=$temperaturas/$diasdasemana;

echo"Temperatura media: $temperaturamedia\n";
echo"A maior temperatura foi: $maior";



?>