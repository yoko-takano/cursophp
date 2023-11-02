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
        <h1>Banco Caseiro</h1>
        <pre>
            <?php
                require_once "ContaBanco.php";
                $c1 = new ContaBanco;
                $c1->abrirConta("CC");
                $c1->setDono("Renan Araújo");
                $c1->setnumConta("001");
                $c1->depositar(300);
                $c1->pagarMensal();

                echo "<h2>Informações da conta de <em>" . $c1->getDono() . "</em>:</h2>";
                echo "<p>Número da conta: " . $c1->getnumConta() . "</p>";
                echo "<p>Tipo da conta: " . $c1->getTipo() . "</p>";
                echo "<p>Saldo atual: R$ " . number_format($c1->getSaldo(), 2, ",", ".") . "</p>";
                echo "<p>Status atual: " . $c1->getStatus() . "</p>";
            ?>
        </pre>
        <pre>
            <?php
                require_once "ContaBanco.php";
                $c2 = new ContaBanco;
                $c2->abrirConta("CP");
                $c2->setDono("Yoko Takano");
                $c2->setnumConta("002");
                $c2->depositar(500);
                $c2->pagarMensal();

                echo "<h2>Informações da conta de <em>" . $c2->getDono() . "</em>:</h2>";
                echo "<p>Número da conta: " . $c2->getnumConta() . "</p>";
                echo "<p>Tipo da conta: " . $c2->getTipo() . "</p>";
                echo "<p>Saldo atual: R$ " . number_format($c2->getSaldo(), 2, ",", ".") . "</p>";
                echo "<p>Status atual: " . $c2->getStatus() . "</p>";
            ?>
        </pre>
    </main>
</body>
</html>