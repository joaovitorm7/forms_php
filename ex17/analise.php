 <?php

    $textoAnalise = "A programação PHP é fundamental para o desenvolvimento web";

    $palavras = explode(" ", $textoAnalise);
    $quantidade = count($palavras);

    echo "<p><strong>Vetor de Palavras:</strong></p>";
    echo "<pre>";
    print_r($palavras);
    echo "</pre>";

    echo "<p><strong>Quantidade de palavras:</strong> $quantidade</p>";
    
?>