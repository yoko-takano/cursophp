<!DOCTYPE html>
<html lang="pt-BR">
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

            $inicio = date("m-d-Y", strtotime("-7 days")); // sete dias antes
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $dindin = $_GET["dindin"] ?? 0;
            $convertido = $dindin / $cotacao;
    
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $dindin, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $convertido, "USD") . "</strong></p>";

            echo "<p><strong>Cotação fixa de R\$ $cotacao</strong> retirada diretamente do <a href='https://www.bcb.gov.br' target='_blank'>Banco Central do Brasil</a>.</p>" 
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>