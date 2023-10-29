<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M01A21</title>
</head>
<body>
    <h1>Tipos Primitivos em PHP</h1>
    <?php 
        //0x (hexadecimal) 0b (binário) 0 (octal)
        $num = 0b1011;
        print "<p>O valor da variável é $num.</p>";

        $v = (int)3e3;
        var_dump($v);

        $casado = false;
        print "<p>O valor para casado é $casado.</p>";

        $vet = [6, 8.3, 9, "Maria", 5];
        var_dump($vet);

        print "<p></p>";

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
        const estado = "AM";
        print "<p> Moro no estado do " . estado . "! </p>";

        $nome = "Renan";
        $snome = "Janzen";
        $apel = "Momolado";
        print "$nome \"$apel\" $snome";
    ?>
</body>
</html>