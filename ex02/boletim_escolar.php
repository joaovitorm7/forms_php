<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Boletim Escolar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastro de Notas</h1>
    <form method="POST" action="">
        <fieldset>
            <legend>Notas do Aluno</legend>

            <label for="portugues">Português:</label>
            <input type="number" step="0.01" name="portugues" id="portugues" required>

            <label for="matematica">Matemática:</label>
            <input type="number" step="0.01" name="matematica" id="matematica" required>

            <label for="historia">História:</label>
            <input type="number" step="0.01" name="historia" id="historia" required>

            <label for="geografia">Geografia:</label>
            <input type="number" step="0.01" name="geografia" id="geografia" required>
        </fieldset>

        <button type="submit">Ver Boletim</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $boletim = [
            "Português" => $_POST["portugues"],
            "Matemática" => $_POST["matematica"],
            "História" => $_POST["historia"],
            "Geografia" => $_POST["geografia"]
        ];

        echo "<h2>Resultado do Boletim</h2>";
        echo "<ul>";
        foreach ($boletim as $disciplina => $nota) {
            $status = ($nota >= 7.0) ? "Aprovado" : "Reprovado";
            echo "<li><strong>$disciplina:</strong> Nota $nota - $status</li>";
        }
        echo "</ul>";
    }
    ?>
    <a href="http://localhost/forms/ex01/">Voltar para o exercício anterior</a>
</body>
</html>
