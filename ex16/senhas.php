 <?php
 
    $caracteresPermitidos = ['a', 'b', 'c', '1', '2', '3', '@', '#', '$'];
    $baseSenha = implode("", $caracteresPermitidos);
    echo "<p>Base para geração de senha: <strong>$baseSenha</strong></p>";

?>