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
        <h1>Exercício Prático 009</h1>
        <pre>
            <?php 
            
            echo "<h2>Retorno do servidor:</h2>";

            require_once "Pessoa.php";
            require_once "Livro.php";
            $pessoa[0] = new Pessoa("Yoko", 28, "Feminino");
            $pessoa[1] = new Pessoa("Renan", 25, "Masculino");


            $livro[0] = new Livro("A Conquista das Virtudes", "Francisco Faus", 208, $pessoa[0]);
            $livro[1] = new Livro("As Duas Torres", "J. R. R. Tolkien", 400, $pessoa[1]);
            $livro[2] = new Livro("Crônicas de São Francisco", "I Fioretti", 296, $pessoa[0]);

            $livro[0]->abrir();
            $livro[1]->abrir();
            $livro[1]->folhear(30);
            $livro[1]->avancarPag();
            $livro[0]->detalhes();
            $livro[1]->detalhes();
            $livro[2]->detalhes();
            
            ?>
        </pre>
    </main>    
</body>
</html>