<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $total_segundos = $_GET['totseg'] ?? 0;
        ?>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="totseg">Qual é o total de segundos?</label>
            <input type="number" name="totseg" id="totseg" value = "<?=$total_segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
        
    <section>
        <?php 
            $semanas = intdiv($total_segundos, 604800);
            $resto = $total_segundos % 604800;

            $dias = intdiv($resto, 86400);
            $resto = $resto % 86400;

            $horas = intdiv($resto, 3600);
            $resto = $resto % 3600;

            $minutos = intdiv($resto, 60);
            $segundos = $resto % 60;
        ?>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=$total_segundos?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>