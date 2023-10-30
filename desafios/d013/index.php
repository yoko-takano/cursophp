<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 90px;
        }
    </style>
</head>
<body>
    <?php 
        $din = $_GET["din"] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="din">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="din" id="idin" step="5" min="0" value="<?=$din?>" required>
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$ 100, R$ 50, R$ 10 e R$ 5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
            $din_100 = intdiv($din, 100);
            $resto = $din % 100;

            $din_50 = intdiv($resto, 50);
            $resto = $resto % 50;

            $din_10 = intdiv($resto, 10);
            $resto = $resto % 10;

            $din_5 = intdiv($resto, 5);
        ?> 
        <h2>Saque de R$ <?=number_format($din, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico irá te entregar as seguintes notas:</p>
        <ul>
            <li><img src="100-reais.jpg" alt="R$100,00" class="nota"> x <?=$din_100?></li>
            <li><img src="50-reais.jpg" alt="R$50,00" class="nota"> x <?=$din_50?></li>
            <li><img src="10-reais.jpg" alt="R$10,00" class="nota"> x <?=$din_10?></li>
            <li><img src="5-reais.jpg" alt="R$5,00" class="nota"> x <?=$din_5?></li>
        </ul>
    </section>
</body>
</html>