<?php
$turmaalunos=12;
$limitedefaltas=15;
$alunosacimadolimite=0;

for($i=1;$i<=$turmaalunos;$i++){
    $faltaaluno=(int) readline("Digite o numero de faltas do aluno $i:\n");
    if($faltaaluno<$limitedefaltas){
        echo "O aluno $i esta dentro do limite de faltas\n\n";
    }
    else{
        echo "O aluno $i ultrapassou o limite de faltas\n\n";

        $alunosacimadolimite++;
    }
}
 
echo"O total de alunos que ultrapassou o limite de faltas foi: $alunosacimadolimite";


?>