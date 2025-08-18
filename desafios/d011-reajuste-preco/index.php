<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0.01" value="<?= $_GET['preco'] ?? '' ?>">

            <label for="reajus">
                Qual será o porcentual de reajuste? (<span id="valorReajuste"><?= $_GET['reajus'] ?? 0 ?></span>%)
            </label>
            <input type="range" name="reajus" id="reajus" min="0" max="100" step="1" value="<?= $_GET['reajus'] ?? 0 ?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            if (isset($_GET['preco']) && isset($_GET['reajus'])) {
                $preco = (float) $_GET['preco'];
                $reajus = (float) $_GET['reajus'];
                $valor_novo = $preco + ($preco * $reajus / 100);
                echo "<p>O produto que custava R$" . number_format($preco, 2, ',', '.') . ", com $reajus% de aumento, vai passar a custar R$" . number_format($valor_novo, 2, ',', '.') . " a partir de agora.</p>";
            }
        ?>
    </section>

    <script>
        const range = document.getElementById('reajus');
        const output = document.getElementById('valorReajuste');
        output.textContent = range.value;
        range.addEventListener('input', function () {
            output.textContent = this.value;
        });
    </script>
</body>
</html>
