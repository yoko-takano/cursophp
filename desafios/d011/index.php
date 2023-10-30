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
        $reaj = $_GET["reaj"] ?? 0;
        $preco = $_GET["preco"] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0.01" value="<?=$preco?>">

            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            $aume = $preco * ((100 + $reaj) / 100);
            echo "O produto que custava " . numfmt_format_currency($padrao, $preco, "BRL") . ", com <strong> $reaj% de aumento</strong> vai passar a custar <strong>" . numfmt_format_currency($padrao, $aume, "BRL") . "</strong> a partir de agora."
        ?>
    </section>
    <script>
        // Declarações automáticas
        mudaValor()
        function mudaValor() {
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>