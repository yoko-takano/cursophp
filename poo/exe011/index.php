<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <main>
        <h1>Polimorfismo de Sobrecarga </h1>
        <pre>
            <?php 
            echo "<h2>Retorno do Servidor</h2>";

            require_once "Cachorro.php";
            require_once "Lobo.php";
            require_once "Mamifero.php";

            $mamifero = new Mamifero;
            $mamifero->emitirSom();

            $lobo = new Lobo;
            $lobo->emitirSom();
            
            $cachorro = new Cachorro;
            $cachorro->emitirSom();
            $cachorro->reagirDono(true);
            $cachorro->reagirFrase("Senta!");
            $cachorro->reagirHora(18, 11);
            $cachorro->reagirIdadePeso(10, 18);





            ?>
        </pre>
    </main>
</body>
</html>