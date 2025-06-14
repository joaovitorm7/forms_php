<?php

if (isset($_POST['gerar'])) {
    $listaParticipantes = ['Carlos', 'Ana', 'João', 'Maria', 'João', 'Pedro', 'Maria', 'Ana'];

    $participantesUnicos = array_unique($listaParticipantes);

    echo "<h2>Lista de Participantes Únicos:</h2>";
    echo "<ul>";
    foreach ($participantesUnicos as $nome) {
        echo "<li>$nome</li>";
    }
    echo "</ul>";
}
?>