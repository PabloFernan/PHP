

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
        $inicio=date("m-d-Y",strtotime("-7 days"));
        $fim=date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];

        $dolar = round($reais / $cotacao);
        echo "Seus R\$$reais, equivalem a <strong>US\$$dolar</strong>";
        echo"<p>cotação de $cotacao retirada diretamente do banco centrar através de API</p>"
        ?>
        
    <div id="voltar">
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
    </main>
</body>
</html>