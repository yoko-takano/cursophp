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
        $n1 = $_GET["n1"] ?? 0;
        $n2 = $_GET["n2"] ?? 0;
    ?>
    <main>
        <h1>Notas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            
            <label for="n1">Nota 1</label>
            <input type="number" name="n1" id="n1" min="0" max="10" required step="0.01" value="<?=$n1?>">

            <label for="n2">Nota 2</label>
            <input type="number" name="n2" id="n2" min="0" max="10" required step="0.01" value="<?=$n2?>">

            <input type="submit" value="Calcular">

        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $media = ($n1 + $n2)/2;
            $result = ($media >= 5)?"aprovado":"reprovado";
            // por intermédio de uma variável
            echo "<p>Sua média foi " . number_format($media, 2, ",", ".") . " e você está $result.</p>";
            // diretamente na linha do eco
            echo "<p>Sua média foi " . number_format($media, 2, ",", ".") . " e você está " . (($media >= 5)?"aprovado":"reprovado") . ".</p>";
        ?>
    </section>
</body>
</html>