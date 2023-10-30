<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividen = $_GET["dividen"] ?? 0;
        $divisor = $_GET["divisor"] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="$_GET">
            <label for="dividen">Dividendo</label>
            <input type="number" name="dividen" id="idividen" value="<?=$dividen?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="idivisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
            $resto = $dividen % $divisor;
            $quociente = intdiv($dividen, $divisor);
            echo "
            <ul>
                <li> Dividendo = $dividen </li>
                <li> Divisor = $divisor </li>
                <li> Quociente = $quociente </li>
                <li> Resto = $resto </li>
            </ul>
            ";
        ?>
    </section>
</body>
</html>