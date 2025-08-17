<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
        $num = $_POST["numreal"] ?? 0;
        echo "<p>Analizando o número <strong>".number_format($num, 3, ",", ".")." </strong>informado pelo usuário:</p>";

        $parte_int = (int) $num;
        $parte_frac=$num - $parte_int ;

        echo "<ul><li> A parte inteira do número é <strong>".number_format($parte_int, 0, ",", ".")."</strong>";
        echo "<li> A parte  fracionária do número é <strong>".number_format($parte_frac, 3, ",",".")."</strong>";
        ?>
    <div id="voltar">
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </div>
    </main>
</body>
</html>