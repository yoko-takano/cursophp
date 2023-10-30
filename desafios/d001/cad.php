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

            /*
            No echo, usar "Sucessor de $num é " . ($numero - 1);
            */

            $numero = $_GET["numero"] ?? 0;
            $antes = $numero - 1;
            $depois = $numero + 1;
            echo "<p>O número escolhido foi <strong>$numero</strong></p>";
            echo "<p>O seu <em>antecessor</em> é $antes</p>";
            echo "<p>O seu <em>sucessor</em> é $depois</p>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>