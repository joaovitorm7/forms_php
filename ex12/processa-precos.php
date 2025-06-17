<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $precosAntigo = [15.50, 22.00, 30.75, 8.99];

    $precosNovo = array_map(function($preco) {
        return round($preco * 1.10, 2); 
    }, $precosAntigo);

    echo "<h2>Comparação de Preços</h2>";

    echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
    echo "<tr><th>Preço Antigo (R$)</th><th>Preço Novo (R$)</th></tr>";

    for ($i = 0; $i < count($precosAntigo); $i++) {
        echo "<tr>";
        echo "<td>" . number_format($precosAntigo[$i], 2, ',', '.') . "</td>";
        echo "<td>" . number_format($precosNovo[$i], 2, ',', '.') . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Acesso inválido.";
}
?>
