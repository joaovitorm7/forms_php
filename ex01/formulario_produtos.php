<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Cadastro de Produtos</h2>
    <form action="processa_produtos.php" method="post">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <fieldset>
                <legend>Produto <?= $i ?></legend>
                <div class="form-group">
                    <label for="nome<?= $i ?>">Nome:</label>
                    <input type="text" name="produtos[<?= $i ?>][nome]" id="nome<?= $i ?>">
                </div>
                <div class="form-group">
                    <label for="sku<?= $i ?>">SKU:</label>
                    <input type="text" name="produtos[<?= $i ?>][sku]" id="sku<?= $i ?>">
                </div>
            </fieldset>
        <?php endfor; ?>
            <input type="submit" value="Cadastrar Produtos">
    </form>
    <a href="http://localhost/forms/">Voltar para a página inicial</a>
</body>
</html>
