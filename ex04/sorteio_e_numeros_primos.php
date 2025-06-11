<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sorteio e Números Primos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Sorteio da Loteria</h2>
        <form method="POST">
            <button type="submit" name="sortear">Sortear Números</button>
        </form>

        <?php
            function ehPrimo($numero) {
                if ($numero < 2) return false;

                for ($i = 2; $i <= sqrt($numero); $i++) {
                    if ($numero % $i == 0) {
                        return false;
                    }
                }
                return true;
            }
            
            if (isset($_POST['sortear'])) {
                $numerosSorteados = [];
                $quantidadePrimos = 0;

                for ($i = 0; $i < 10; $i++) {
                    $numero = rand(1, 60);
                    $numerosSorteados[] = $numero;

                    if (ehPrimo($numero)) {
                        $quantidadePrimos++;
                    }
                }


                echo "<h3>Números Sorteados:</h3>";
                echo "<p>" . implode(" - ", $numerosSorteados) . "</p>";
                echo "<h3>Total de Números Primos: $quantidadePrimos</h3>";
            }

        ?>
    </div>
    <a href="http://localhost/forms/ex03/">Voltar para o exercício anterior</a>
    <a href="http://localhost/forms/">Voltar para a página inicial</a>
</body>
</html>
