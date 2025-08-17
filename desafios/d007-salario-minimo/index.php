<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            $salario = $_GET['salario'] ?? 0;
            $salario = floatval($salario);
            $salario_formatado = number_format($salario, 2, ',', '.');

            // Variável do salário mínimo
            $salario_minimo = 1518.00;
            $salario_minimo_formatado = number_format($salario_minimo, 2, ',', '.');
        ?>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?= $salario ?>">
            <p>Considerando o salário mínimo de <strong>R$ <?= $salario_minimo_formatado ?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="divisao">
        <?php 
            $quantidade = (int)($salario / $salario_minimo);
            $resto = $salario % $salario_minimo;
            $resto_formatado = number_format($resto, 2, ',', '.');
        ?>
        <h2>Resultado Final</h2>
        <p>
            Quem recebe um salário de R$ <?= $salario_formatado ?> ganha 
            <?= $quantidade ?> salário(s) mínimo(s) + R$ <?= $resto_formatado ?>
        </p>
    </section>
</body>
</html>
