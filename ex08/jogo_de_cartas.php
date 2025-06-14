<?php

if (isset($_POST['embaralhar'])) {

    $cartas = [
        "Ás de Espadas",
        "Rei de Copas",
        "Rainha de Ouros",
        "Valete de Paus",
        "10 de Espadas",
        "9 de Copas"
    ];

    echo "<h2>Antes do embaralhamento:</h2>";
    echo "<ul>";
    foreach ($cartas as $carta) {
        echo "<li>$carta</li>";
    }
    echo "</ul>";

    shuffle($cartas);
    
    echo "<h2>Depois do embaralhamento:</h2>";
    echo "<ul>";
    foreach ($cartas as $carta) {
        echo "<li>$carta</li>";
    }
    echo "</ul>";
}
?>