<?php
if (isset($_POST['enviar'])) {
    $categoriasProdutos = ['Eletrônicos', 'Roupas', 'Livros', 'Alimentos', 'Brinquedos'];

    echo "<h2>Ordem alfabética crescente:</h2>";
    $crescente = $categoriasProdutos;
    sort($crescente);
    echo "<ul>";
    foreach ($crescente as $cat) {
        echo "<li>$cat</li>";
    }
    echo "</ul>";

    echo "<h2>Ordem alfabética decrescente:</h2>";
    $decrescente = $categoriasProdutos;
    rsort($decrescente);
    echo "<ul>";
    foreach ($decrescente as $cat) {
        echo "<li>$cat</li>";
    }
    echo "</ul>";
}
?>
