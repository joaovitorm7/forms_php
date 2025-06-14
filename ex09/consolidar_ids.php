<?php

if (isset($_POST['consolidar'])) {
    $idsFonteA = [101, 105, 102];
    $idsFonteB = [103, 101, 106];

    $todosIds = array_merge($idsFonteA, $idsFonteB);

    $todosIdsUnicos = array_unique($todosIds);

    echo "<h2>IDs Consolidados (sem duplicatas):</h2>";
    echo "<ul>";
    foreach ($todosIdsUnicos as $id) {
        echo "<li>ID: $id</li>";
    }
    echo "</ul>";
}
?>