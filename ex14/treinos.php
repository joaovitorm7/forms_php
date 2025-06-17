 <?php

    $registrosTreino = [
        ["João", [80, 90, 85]],
        ["Maria", [70, 75, 78, 72]],
        ["Carlos", [60, 65]]
    ];

    foreach ($registrosTreino as $aluno) {
        $nome = $aluno[0];
        $resultados = $aluno[1];

        $soma = array_sum($resultados);
        $quantidade = count($resultados);
        $media = $soma / $quantidade;

        echo "<p><strong>$nome:</strong> Média dos treinos = " . number_format($media, 2, ',', '.') . "</p>";
    }
?>