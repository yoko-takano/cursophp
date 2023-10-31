<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $atual = date("Y");
            $nasc = $_GET["nasc"] ?? 2000;
        ?>
        <h1>Voto obrigatório?</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        
            <label for="atual">Ano atual:</label>
            <input type="number" name="atual" id="atual" value="<?=$atual?>">

            <label for="nasc">Ano de nascimento:</label>
            <input type="number" name="nasc" id="nasc" value="<?=$nasc?>">

            <input type="submit" value="Verificar">
    
        </form>
    </main>
    <section>
        <h2>Resultado:</h2>
        <?php 
            $idade = $atual - $nasc;
            echo "Você tem $idade anos";
            $result = ($idade >= 18 && $idade <= 70)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
            echo " e seu voto é <strong>$result</strong>.";
        ?>
    </section>
</body>
</html>