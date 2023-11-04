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
        <h1>Exercício 12 - Herança</h1>
        <pre>
            <?php 
                echo "<h2>Retorno do servidor:</h2>";
                require_once "Mamifero.php";
                require_once "Peixe.php";
                require_once "Ave.php";
                require_once "Reptil.php";
                require_once "Canguru.php";
                require_once "Cachorro.php";
                require_once "Cobra.php";
                require_once "Tartaruga.php";
                require_once "Goldfish.php";
                require_once "Arara.php";

                $mamifero = new Mamifero;
                $mamifero->setPeso(85.30);
                $mamifero->setIdade(2);
                $mamifero->setMembros(4);
                $mamifero->locomover();
                $mamifero->alimentar();
                $mamifero->emitirSom();
                $mamifero->setCorPelo("Azul");
                print_r($mamifero);

                $peixe = new Peixe;
                $peixe->setPeso(0.35);
                $peixe->setIdade(1);
                $peixe->setMembros(0);
                $peixe->locomover();
                $peixe->alimentar();
                $peixe->emitirSom();
                $peixe->soltarBolha();
                $peixe->setCorEscama("Vermelho");
                print_r($peixe);

                $ave = new Ave;
                $ave->setPeso(0.89);
                $ave->setIdade(2);
                $ave->setMembros(2);
                $ave->locomover();
                $ave->alimentar();
                $ave->emitirSom();
                $ave->fazerNinho();
                $ave->setCorPena("Branco");
                print_r($ave);

                $reptil = new Reptil;
                $reptil->setPeso(3.30);
                $reptil->setIdade(2);
                $reptil->setMembros(0);
                $reptil->locomover();
                $reptil->alimentar();
                $reptil->emitirSom();
                $reptil->setCorEscama("Preto");
                print_r($reptil);
                
                $canguru = new Canguru;
                $canguru->setPeso(55.30);
                $canguru->setIdade(3);
                $canguru->setMembros(4);
                $canguru->locomover();
                $canguru->alimentar();
                $canguru->emitirSom();
                $canguru->usarBolsa();
                $canguru->setCorPelo("Marrom");
                print_r($canguru);

                $cachorro = new Cachorro;
                $cachorro->setPeso(3.94);
                $cachorro->setIdade(5);
                $cachorro->setMembros(4);
                $cachorro->locomover();
                $cachorro->alimentar();
                $cachorro->emitirSom();
                $cachorro->abanarRabo();
                $cachorro->setCorPelo("Caramelo");
                print_r($cachorro);

                $tartaruga = new Tartaruga;
                $tartaruga->setPeso(5);
                $tartaruga->setIdade(100);
                $tartaruga->setMembros(4);
                $tartaruga->locomover();
                $tartaruga->alimentar();
                $tartaruga->emitirSom();
                $tartaruga->setCorEscama("Verde");
                print_r($tartaruga);



            ?>
        </pre>
    </main>
</body>
</html>