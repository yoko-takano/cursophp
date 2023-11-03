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
        <h1>Exercício 010 - Herança Pt. 01</h1>
        <pre>
            <?php 
                require_once "Pessoa.php";
                require_once "Aluno.php";
                require_once "Funcionario.php";
                require_once "Professor.php";

                echo "<h2>Saída do Servidor:</h2>";
                $p1 = new Pessoa;
                $p2 = new Aluno;
                $p4 = new Funcionario;                
                $p3 = new Professor;

                $p1->setNome("Renan");
                $p2->setNome("Yoko");
                $p3->setNome("Tatsuya");
                $p4->setNome("Miyako");

                $p2->setCurso("Informática");
                $p3->setSalario(3043.50);
                $p3->receberAumento(500.35);
                $p4->setSetor("Estoque");
                $p4->mudarTrabalho();
                
                print_r($p1);
                print_r($p2);
                print_r($p3);
                print_r($p4);

            ?>
        </pre>
    </main>
</body>
</html>