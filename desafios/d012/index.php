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
        $segs = $_GET["segs"] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segs">Qual é o total de segundos?</label>
            <input type="number" name="segs" id="isegs" value="<?=$segs?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando</h2>
        <?php 
            $sem = intdiv($segs, 604800); // 604.800 segundos
            $res_sem = $segs % 604800;

            $dias = intdiv($res_sem, 86400); // 86.400 segundos
            $res_dias = $res_sem % 86400;
            
            $horas = intdiv($res_dias, 3600); // 3.600 segundos
            $res_hrs = $res_dias % 3600;
            
            $min = intdiv($res_hrs, 60); // 60 segundos
            $res_min = $res_hrs % 60;
            
            $sseg = $res_min;

            echo "Analisando o valor que você digitou de <strong>" . number_format($segs, 0, ",", ".") . " segundos</strong> equivalem a um total de:";
            echo "<ul>
                <li>$sem semanas</li>
                <li>$dias dias</li>
                <li>$horas horas</li>
                <li>$min minutos</li>
                <li>$sseg segundos</li>
            </ul>"
        ?>
    </section>
</body>
</html>