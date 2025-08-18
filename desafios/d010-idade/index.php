<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $anoAtual = date("Y");

            $data_nasc = $_GET['nasc'] ?? '';
            $ano_ref = $_GET['ano'] ?? $anoAtual;

            $idade = '';
            if ($data_nasc && $ano_ref) {
                $idade = $ano_ref - $data_nasc;
            }
        ?>

        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1800" max="<?=$anoAtual?>" value="<?=$data_nasc?>" required>

            <label for="ano">
                Quer saber sua idade em qual ano? 
                (atualmente estamos em <strong><?=$anoAtual?></strong>)
            </label>
            <input type="number" name="ano" id="ano" min="1800" value="<?=$ano_ref?>" required>

            <input type="submit" value="Qual será sua idade?">
        </form>

        <?php if ($idade !== ''): ?>
            <section>
                <h2>Resultado</h2>
                <p>Quem nasceu em <?=$data_nasc?> vai ter <strong><?=$idade?></strong> anos em <?=$ano_ref?>.</p>
            </section>
        <?php endif; ?>
    </main>
</body>
</html>
