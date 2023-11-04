<?php 
require_once "Mamifero.php";
class Cachorro extends Mamifero {

    public function enterrarOsso() {
        echo "<p>Enterrando osso...</p>";
    }
    public function abanarRabo() {
        echo "<p>Abanando o rabo...</p>";
    }
    public function emitirSom() {
        echo "<p> Latindo Au Au Au...</p>";
    }

}
?>