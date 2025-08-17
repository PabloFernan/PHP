<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia da Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = is_numeric($_GET['dividendo'] ?? '') ? (int) $_GET['dividendo'] : 0;
        $divisor = is_numeric($_GET['divisor'] ?? '') && (int)$_GET['divisor'] != 0 ? (int) $_GET['divisor'] : 1;
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="idDividendo">Dividendo</label>
            <input type="number" name="dividendo" id="idDividendo" min="0" value="<?=$dividendo?>">
            <label for="idDivisor">Divisor</label>
            <input type="number" name="divisor" id="idDivisor" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">

        </form>
    </main>
    <section id="resultado-divisao">
        <h2>Estrutura da Divisão</h2>
        <?php 
            $resultado = (int)($dividendo / $divisor);
            $resto = ($dividendo % $divisor);
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$resultado?></td>
            </tr>

        </table>
    </section>

</body>
</html>