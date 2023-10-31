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
            $sexo = $_GET["sexo"] ?? "mulher";
            $nome = isset($_GET["nome"])?$_GET["nome"]:"Unknown";
            $nasc = $_GET["nasc"] ?? 2000;
        ?>
        <h1>Teste</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required value="<?=$nome?>">

            <label for="nasc">Ano de Nascimento:</label>
            <input type="number" name="nasc" id="nasc" value="<?=$nasc?>">

            <fieldset>
                <legend>Sexo:</legend>
                <input type="radio" name="sexo" id="idfem" value="mulher" checked>
                <label for="idfem">Feminino</label>
                <input type="radio" name="sexo" id="idmasc" value="homem">
                <label for="idmasc">Masculino</label>
            </fieldset>
            <input type="submit" value="Verificar">
        </form>
    </main>
    <section>
        <h2>Retorno:</h2>
        <?php 
            echo "$nome é $sexo e nasceu em $nasc."
        ?>
    </section>
</body>
</html>