<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador aleatório</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório de 0 a 100...</p>

        <p>
            <?php
                $numero = mt_rand(0, 100);
                echo "Número gerado: $numero";
                
            ?>
        </p>

        <form method="post">
            <input type="submit" value=" &#x1F504; Gerar outro">
        </form>

    </main>
</html>