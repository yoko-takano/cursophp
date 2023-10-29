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
            $dindin = $_GET["dindin"];
            // R$ 5,22
            $convertido = $dindin / 5.22;
            $arredondado = round($convertido,2);
            echo "<p>Seus R\$$dindin equivalem a <strong>US$$$arredondado </strong></p>";
            echo "<p><strong>Cotação fixa de R$ 5,22</strong> informada diretamente no código.</p>" 
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </main>
</body>
</html>