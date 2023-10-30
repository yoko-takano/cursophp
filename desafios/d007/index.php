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
        $sal = $_GET["sal"] ?? 0;
        $min = 1380;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="$_GET">
            <label for="sal">Salário</label>
            <input type="number" name="sal" id="sal" step="0.01" value="<?=$sal?>">
            <p>Considerando o salário mínimo de <strong>R$ 1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form> 
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $int = intdiv($sal, $min);
            $resto = (($sal/$min)-$int)*$min;
            echo "Quem recebe um salário de " . numfmt_format_currency($padrao, $sal, "BRL") . " ganha <strong> $int salários mínimos + " . numfmt_format_currency($padrao, $resto, "BRL") . "</strong>.";
        ?>
    </section>
</body>
</html>