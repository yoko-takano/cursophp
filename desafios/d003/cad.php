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
            $dindin = $_GET["dindin"] ?? 0;
            $cotacao = 5.17;
            $convertido = $dindin / $cotacao;
    
            //echo "<p>Seus R\$" . number_format($dindin, 2, ",", ".") . " equivalem a <strong>US\$" . number_format($convertido, 2, ",", ".") . "</strong></p>";

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $dindin, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $convertido, "USD") . "</strong></p>";

            echo "<p><strong>Cotação fixa de R\$ $cotacao</strong> informada diretamente no código.</p>" 
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>