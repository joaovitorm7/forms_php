<?php

if (isset($_POST['enviar'])) {

    $precosProdutos = [
        "Arroz" => 5.99,
        "Feijão" => 6.49,
        "Leite" => 4.89,
        "Óleo" => 7.25,
        "Açúcar" => 3.75
    ];

    asort($precosProdutos);

    echo "<h2>Relatório de Ofertas (Mais Barato → Mais Caro):</h2>";
    echo "<ul>";
    foreach ($precosProdutos as $produto => $preco) {
        echo "<li>$produto - R$ " . number_format($preco, 2, ',', '.') . "</li>";
    }
    echo "</ul>";
}
?>
