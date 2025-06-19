 <?php
    
    $dadosSensor = [15.2, 28.9, 12.0, 35.5, 20.1, 40.0, 5.8];

    $leiturasFiltradas = array_filter($dadosSensor, function($valor) {
        return $valor > 25.0;
    });

    $leiturasFiltradas = array_values($leiturasFiltradas);

    echo "<p><strong>Leituras filtradas (acima de 25.0):</strong></p>";
    echo "<pre>";
    print_r($leiturasFiltradas);
    echo "</pre>";
?>