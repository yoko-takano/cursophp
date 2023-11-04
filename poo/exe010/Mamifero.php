<?php 
require_once "Animal.php";
class Mamifero extends Animal {
    private $corPelo;
    
    public function locomover() {
        echo "<p>Correndo...</p>";
    }
    public function alimentar() {
        echo "<p>Mamando...</p>";
    }
    public function emitirSom() {
        echo "<p>Som de mamífero...</p>";
    }

    // Métodos Getters
    public function getCorPelo() {
        return $this->corPelo;
    } 

    // Métodos Setters
    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}
?>