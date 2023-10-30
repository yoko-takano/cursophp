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
        $num = $_GET["num"] ?? 0;
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="$_GET">
            <label for="num">Numero</label>
            <input type="number" name="num" id="inum" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $quad = $num**(1/2);
            $cub = $num**(1/3);
            echo "<p>Analisando o <strong>número $num</strong>, temos:</p>";
            echo "<ul>
                <li>A sua raiz quadrada é <strong>" . number_format($quad, 3, ",", ".") . "</strong></li>
                <li>A sua raiz cúbica é <strong>" . number_format($cub, 3, ",", ".") . "</strong></li>
            </ul>"
        ?>
    </section>
</body>
</html>