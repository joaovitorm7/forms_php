<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estoque de Gestão de Livros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gestão de Estoque de Livros</h1>
    <form action="" method="post">
        <label for="novoLivro">Novo título de livro:</label>
        <input type="text" id="novoLivro" name="novoLivro" required>

        <button type="submit">Adicionar Livro e Atualizar Estoque</button>
    </form>

    <?php
        $livros = ["Dom Casmurro", "O pequeno príncipe", "1984", "A moreninha", "O Guarani"];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $novoLivro = trim($_POST["novoLivro"]);
            if(!empty($novoLivro)) {
                $livros[] = $novoLivro;
            }

            // Verifica se o terceiro livro existe e o remove
            if(isset($livros[2])) {
                unset($livros[2]); 
                $livros = array_values($livros);
            }

            echo "<h3>Estoque Atualizado:</h3>";
            echo "<ul>";
            foreach ($livros as $livro) {
                echo "<li>$livro</li>";
            }
            echo "</ul>";
        }
    ?>
    <a href="http://localhost/forms/ex02/">Voltar para o exercício anterior</a>
</body>
</html>
