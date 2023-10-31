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
        <h1>Aula 02 Prática - POO</h1>
        <p>
            <pre>
                <?php
                    require_once "caneta.php";
                    $c1 = new Caneta; // instanciando
                    $c1->cor = "Azul";
                    $c1->ponta = 0.5;
                    $c1->tampada = true;
                    $c1->destampar();
                    $c1->rabiscar();
                    echo "<br/><br/>";
                    print_r($c1);
                
                    echo "<br/><br/>";
                    $c2 = new Caneta;
                    $c2->cor = "Verde";
                    $c2->carga = 50;
                    $c2->tampar();
                    print_r($c1);
                ?>
            </pre>
        </p>
    </main>
</body>
</html>