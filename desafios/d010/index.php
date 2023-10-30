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
        $nasc = $_GET["nasc"] ?? 0;
        $ano_atual = date("Y");
        $ano = $_GET["ano"] ?? 0;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="$_GET">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" value="<?=$nasc?>">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$ano_atual?>)</strong></label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $ano - $nasc;
            echo "Quem nasceu em $nasc vai ter $idade anos em $ano!";
        ?>
    </section>
</body>
</html>