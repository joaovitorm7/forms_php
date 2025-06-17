 <?php
    $despesasMensais = [1200.50, 850.75, 1500.00, 920.30, 1100.20];

    $soma = array_sum($despesasMensais);
    $quantidade = count($despesasMensais);
    $media = $soma / $quantidade;

    echo "<h1>Média de Gastos Mensais</h1>";
    echo "<p>Despesas registradas: " . implode(", ", $despesasMensais) . "</p>";
    echo "<p>Média de gastos mensais: R$ " . number_format($media, 2, ',', '.') . "</p>";
?>