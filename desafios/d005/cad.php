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
            $numero = $_GET["numero"] ?? 0;
            $inteiro = (int) $numero;
            $fracao = $numero - $inteiro;
            echo "<p>Analisando o número <strong>" . number_format($numero, 3, ",", "."). "</strong> informado pelo usuário:</p>";
            echo "
            <ul type='square'>
                <li>A parte inteira do número é <strong>" . number_format($inteiro, 0, ",", ".") . "</strong>.</li>
                <li>A parte fracionária do número é <strong>" . number_format($fracao, 3, ",", ".") . "</strong>.</li>
            </ul>
            ";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>