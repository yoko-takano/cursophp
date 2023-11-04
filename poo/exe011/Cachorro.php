<?php 
require_once "Lobo.php";
class Cachorro extends Lobo {

    public function emitirSom() {
        echo "<p>Latindo Au Au Au...</p>";
    }

    // Polimorfismo de sobrecarga
    public function reagirFrase($frase) {
        if ($frase == "Hora de comer" || "Olá") {
            echo "<p>Abanar e latir</p>";
        } else {
            echo "<p>Rosnar</p>";
        }
    }
    public function reagirHora($hora, $min) {
        if ($hora < 12) {
            echo "<p>Abanar</p>";
        } elseif ($hora>=18) {
            echo "<p>Ignorar</p>";
        } else {
            echo "<p>Abanar e latir</p>";
        }
    }
    public function reagirDono($dono) {
        if ($dono) {
            echo "<p>Abanar</p>";
        } else {
            echo "<p>Rosnar e latir</p>";
        }
    }
    public function reagirIdadePeso($idade, $peso) {
        if ($idade < 5) {
            if ($peso < 10) {
                echo "<p>Abanar</p>";
            } else {
                echo "<p>Latir</p>";
            }
        } else {
            if ($peso < 10) {
                echo "<p>Rosnar</p>";
            } else {
                echo "<p>Ignorar</p>";
            }
        }
    }
}
?>