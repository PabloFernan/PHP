<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $numero = $_GET['numero'] ?? 0;
        
        ?>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="numero">Número: </label>
        <input type="number" name="numero" id="numero" value="<?=$numero?>">
        <input type="submit" value="Calcular Raizes">
        </form>
        <section>
            <h2>Resultado final</h2>
            <?php 
                $raiz_quadrada = sqrt($numero);
                $raiz_cubica = $numero ** (1/3);
                echo "Analisando o <strong>número $numero</strong>, temos:";
            ?>
            <ul>
                <li>A raiz quadrada é <strong><?=$raiz_quadrada?></strong></li>
                <li>A raiz cubica é <strong><?=$raiz_cubica?></strong></li>
            </ul>
        </section>
    </main>
</body>
</html>