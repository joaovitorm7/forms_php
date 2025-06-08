<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["produtos"])) {
    $produtos = $_POST["produtos"];

    echo "<h2>Produtos Cadastrados:</h2>";
    echo "<ul>";

    foreach ($produtos as $produto) {
        $nome = htmlspecialchars($produto["nome"]);
        $sku = htmlspecialchars($produto["sku"]);
        echo "<li>Produto: $nome - SKU: $sku</li>";
    }
    echo "</ul>";
} else {
    echo "Nenhum produto enviado.";
}
?>
