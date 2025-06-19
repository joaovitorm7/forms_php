<?php
        
    $inventario = [ 'notebook' => 20, 'mouse' => 50, 'teclado' => 30];

    if (!array_key_exists('monitor', $inventario)) {
        $inventario['monitor'] = 15;
    }

    if (array_key_exists('notebook', $inventario)) {
        $inventario['notebook'] += 5;
    }

    echo "<ul>";
        foreach ($inventario as $produto => $quantidade) {
            echo "<li><strong>$produto:</strong> $quantidade unidades</li>";
        }
    echo "</ul>";
    
?>