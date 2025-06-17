<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $temperaturasDiarias = $_POST['temp'];

    $temperaturasDiarias = array_map('floatval', $temperaturasDiarias);

    if (count($temperaturasDiarias) < 7) {
        echo "Você precisa inserir 7 temperaturas.";
        exit;
    }

    $maxima = max($temperaturasDiarias);
    $minima = min($temperaturasDiarias);

    echo "<h2>Resultados</h2>";
    echo "Temperaturas registradas: " . implode(", ", $temperaturasDiarias) . "<br>";
    echo "Temperatura máxima registrada: <strong>{$maxima}°C</strong><br>";
    echo "Temperatura mínima registrada: <strong>{$minima}°C</strong><br>";
} else {
    echo "Acesso inválido.";
}
?>
