<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Banco</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $valor_saque = $_GET['saque'] ?? 0;
        ?>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="saque" id="saque" value = "<?=$valor_saque?>" step="5" required>
            <h3 style="padding: 7px;font-size: 12px;color:black;">*Notas disponíveis R$100, R$50, R$10 e R$5</h3>
            <input type="submit" value="Sacar">
        </form>
    </main>
        
    <section>
        <?php 
            $nota_cem = intdiv($valor_saque, 100);
            $resto = $valor_saque % 100;

            $nota_cinquenta = intdiv($resto, 50);
            $resto %= 50;

            $nota_dez = intdiv($resto, 10);
            $resto %= 10;

            $nota_cinco = intdiv($resto, 5);
            $resto %= 5;
        ?>
        <h2>Saque de R$ <?=$valor_saque?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100 reais" class="nota"> x<?=$nota_cem?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50 reais" class="nota"> x<?=$nota_cinquenta?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10 reais" class="nota"> x<?=$nota_dez?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5 reais" class="nota"> x<?=$nota_cinco?></li>
        </ul>
    </section>
</body>
</html>