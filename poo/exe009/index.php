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
        <h1>Exercício 11 - Herança</h1>
        <pre>
            <?php 
                echo "<h2>Retorno do servidor:</h2>";
                
                require_once "Visitante.php";
                require_once "Aluno.php";
                require_once "Bolsista.php";

                $a1 = new Aluno;
                $a1->setNome("Yoko Takano");
                $a1->setMatricula("2023ENG00304");
                $a1->setIdade(28);
                $a1->setSexo("Feminino");
                $a1->setCurso("Engenharia da Computação");
                $a1->pagarMensal();

                $b1 = new Bolsista;
                $b1->setNome("Renan Araujo");
                $b1->setMatricula("2023ENG00305");
                $b1->setIdade(25);
                $b1->setSexo("Masculino");
                $b1->setCurso("Engenharia Elétrica");
                $b1->pagarMensal();
                $b1->setBolsa(12.5);

                print_r($a1);
                print_r($b1);
            ?>
        </pre>
    </main>
</body>
</html>