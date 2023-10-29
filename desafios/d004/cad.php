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
        <h1>Analisador de Número Real</h1>
        <?php
            $numero = $_GET["numero"];
            $inteiro = (int)$numero;
            $fracao = round($numero - $inteiro,3);
            echo "<p>Analisando o número $numero informado pelo usuário:</p>";
            echo "
            <ul type='square'>
                <li>A parte inteira do número é $inteiro</li>
                <li>A parte fracionária do número é $fracao</li>
            </ul>
            ";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </main>
</body>
</html>