<?php 
$especiesObservadas = ['Beija-flor', 'Canário', 'Bem-te-vi', 'Sabiá', 'Beija-flor', 'Coruja'];

if (isset($_POST['verificar'])) {
    $especieDigitada = trim($_POST['verificar']);

    if (in_array($especieDigitada, $especiesObservadas)) {
        echo "<p>A espécie <strong>$especieDigitada</strong> já foi registrada.</p>";
    } else {
        echo "<p>A espécie <strong>$especieDigitada</strong> <span style='color:red;'>não foi registrada.</span></p>";
    }

    $especiesUnicas = array_unique($especiesObservadas);

    echo "<h3>Espécies únicas observadas:</h3>";
    echo "<ul>";
    foreach ($especiesUnicas as $especie) {
        echo "<li>$especie</li>";
    }
    echo "</ul>";
}
?>