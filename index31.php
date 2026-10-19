<?php
$qtdModelos = (int) readline("Digite a quantidade de modelos de IA que serão avaliados: ");
$qtdTestes = (int) readline("Digite a quantidade de testes realizados por cada modelo: ");

$maiorMedia = -1;
$melhorModelo = 1;

for ($i = 1; $i <= $qtdModelos; $i++) {
    echo "\n----------------------------------------\n";
    echo "Avaliando o Modelo de IA #$i\n";
    echo "----------------------------------------\n";
    
    $somaNotas = 0;

    for ($j = 1; $j <= $qtdTestes; $j++) {
        do {
            $nota = (float) readline("Digite a nota do teste $j (0 a 100): ");
            if ($nota < 0 || $nota > 100) {
                echo "Nota inválida! Insira um valor entre 0 e 100.\n";
            }
        } while ($nota < 0 || $nota > 100);
 
        if ($nota < 50) {
            $classificacao = "baixo";
        } elseif ($nota <= 79) {
            $classificacao = "moderado";
        } else {
            $classificacao = "alto";
        }
        echo "   -> Teste $j: Nota $nota (Classificação: $classificacao)\n";

        $somaNotas += $nota;
    }

    $mediaModelo = $somaNotas / $qtdTestes;
    echo "\n>>> Média do Modelo $i: " . number_format($mediaModelo, 2, ',', '.') . "\n";
    if ($i == 1 || $mediaModelo > $maiorMedia) {
        $maiorMedia = $mediaModelo;
        $melhorModelo = $i;
    }
}


echo "\n========================================\n";
echo "RESULTADO FINAL DA ANÁLISE\n";
echo "========================================\n";
echo "O modelo que obteve a **maior média de desempenho** foi o **Modelo $melhorModelo**, com média de " . number_format($maiorMedia, 2, ',', '.') . " pontos.\n";


?>