<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Aula 03 Prática - POO</h1>
        <p>
            <pre>
                <?php
                    require_once "caneta.php";
                    $c1 = new Caneta("BIC", "Verde", 0.5);
                    $c2 = new Caneta("Pentel", "Roxo", 0.7);
                    //$c1->setModelo("BIC");
                    //$c1->setPonta(0.5);
                    print_r($c1);
                    print_r($c2);
                    //echo "Eu tenho uma caneta " . $c1->getModelo() . " de ponta " . $c1->getPonta() . ".";
                ?>
            </pre>
        </p>
    </main>
</body>
</html>