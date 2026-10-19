<?php
$opcao=1;

while($opcao!=0){
echo"Menu de opções:\n";
echo "1 - Cadastrar aluno\n";
echo "2 - Consultar aluno\n";
echo "3 - Excluir aluno\n";
echo "0- Sair\n";

$opcao= (int) readline("Digite uma opcão: ");

    if ($opcao==1){
        echo "Você escolheu: Cadastrar aluno\n";
    }
    elseif($opcao==2){
        echo"Você escolheu: Consultar aluno\n";
    }
    elseif($opcao==3){
        echo "Você escolheu: Excluir aluno\n";
    }
    elseif($opcao==0){
        echo "Saindo do programa...\n";
    }
    else{echo "Opcão inválida! Digite novamente\n";}
}







?>