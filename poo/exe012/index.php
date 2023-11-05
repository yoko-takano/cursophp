<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="outrostyle.css">
</head>
<body>
    <main>
        <h1>Exercício Final de POO</h1>
        <pre>
            <?php 

            echo "<h2>Saída do servidor:</h2>";
            require_once "Video.php";
            require_once "Aluno.php";
            require_once "Visualizacao.php";

            $video[0] = new Video("Aula 1 de POO");
            $video[1] = new Video("Aula 12 de PHP");
            $video[2] = new Video("Aula 15 de JavaScript");

            $aluno[0] = new Aluno("Yoko Takano", 28, "Feminino", "20230eng01");
            $aluno[1] = new Aluno("Renan Janzen", 25, "Masculino", "2016eng01");

            $visualizacao[0] = new Visualizacao($aluno[0], $video[0]);


            print_r($video);
            print_r($aluno);
            print_r($visualizacao);


            ?>
        </pre>
    </main>
</body>
</html>