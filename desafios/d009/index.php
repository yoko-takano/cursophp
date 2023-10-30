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
        $val1 = $_GET["val1"] ?? 1;
        $peso1 = $_GET["peso1"] ?? 1;
        $val2 = $_GET["val2"] ?? 1;
        $peso2 = $_GET["peso2"] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="$_GET">
            <label for="val1">1° Valor</label>
            <input type="number" name="val1" id="val1" value="<?=$val1?>">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="val2">2° Valor</label>
            <input type="number" name="val2" id="val2" value="<?=$val2?>">
            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            echo "<p>Analisando os valores $val1 e $val2:</p>";
            $simples = ($val1 + $val2) / 2;
            $pond = (($val1*$peso1) + ($val2*$peso2)) / ($peso1 + $peso2);
            echo "<ul>
                <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ". number_format($simples, 2, ",", ".") . ".</p>
                <li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a " . number_format($pond, 2, ",", '.') . ".</p>
            </ul>"  
        ?>
    </section>
</body>
</html>