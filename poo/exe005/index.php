<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <main>
        <h1>Exemplo de Encapsulamento</h1>
        <pre>
            <?php
                require_once "ControleRemoto.php";
                $c = new ControleRemoto();
                $c -> ligar();
                $c -> maisVolume();
                $c -> desligar();

                $c -> maisVolume();
                $c -> menosVolume();

                $c -> abrirMenu();
                print_r($c);
            ?>
        </pre>
    </main>
</body>
</html>