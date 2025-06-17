<?php
    $registrosTreino = [
        ["João", [80, 90, 85]],
        ["Maria", [70, 75, 78, 72]],
        ["Carlos", [60, 65]]
    ];

    echo "<h1>Resultados dos Treinos</h1>";
    foreach ($registrosTreino as $aluno) {
        $nome = $aluno[0];
        $resultados = $aluno[1];

        $maior = max($resultados);

        echo "<p><strong>$nome:</strong> Melhor resultado = $maior</p>";
    }
?>