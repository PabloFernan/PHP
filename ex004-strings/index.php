<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <h1>Manipulando Strings</h1>
    <?php 
        $nome = "Rodrigo";
        $sobrenome = "Nogueira";
        $apelido = "Minotauro";

        echo "$nome " .'"Minotauro"' . " $sobrenome <br>";
        echo "$nome \"$apelido\" $sobrenome";
    ?>
</body>
</html>