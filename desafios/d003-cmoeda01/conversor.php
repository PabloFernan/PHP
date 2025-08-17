<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
        $reais = str_replace(',', '.', $_GET["reais"]);
        $dolar = round($reais / 5.41 , 2);
        echo "Seus R\$$reais, equivalem a <strong>US\$$dolar</strong>";
        ?>
        <p>cotação fixa de 5,41, informada diretamente no código</p>
    <div id="voltar">
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
    </main>
</body>
</html>