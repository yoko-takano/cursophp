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
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="ipreco" step="0.01">
            <label for="reaj">Qual será o percentual de reajuste? (%)</label>
            <input type="range" name="reaj" id="ireaj" oninput="ival.innerHTML=Number(ireaj.value)">
        </form>
    </main>
</body>
</html>