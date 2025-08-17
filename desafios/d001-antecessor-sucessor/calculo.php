<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>

        <?php 
            $num = $_REQUEST["numero"];
            $antec = $num - 1;
            $sucec = $num + 1;
            echo "<p>O número escolhido foi: <strong>$num</strong></p>";
            echo "<p>O seu <i>antecessor</i> é $antec</p>";
            echo "<p>O seu <i>sucessor</i> é $sucec</p>";

        ?>
      <div id="voltar">
        <a href="javascript:history.go(-1)">&#x2190; Voltar</a>
    </div>
    </main>
</body>
</html>