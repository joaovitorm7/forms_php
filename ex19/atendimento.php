  <?php
    $filaAtendimento = ['João Silva', 'Maria Santos', 'Pedro Costa'];

    array_unshift($filaAtendimento, 'Ana Oliveira');
    array_push($filaAtendimento, 'Luiz Fernandes');

    echo "<p><strong>Fila de atendimento atual:</strong></p>";
    echo "<ol>"; 
        foreach ($filaAtendimento as $paciente) {
            echo "<li>$paciente</li>";
        }
    echo "</ol>";
?>
