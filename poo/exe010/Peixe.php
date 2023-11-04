<?php 
require_once "Animal.php";
class Peixe extends Animal {

    private $corEscama;
    
    public function locomover(){
        echo "<p>Nadando...</p>";
    }
    public function alimentar(){
        echo "<p>Comendo minhoquinha...</p>";
    }
    public function emitirSom() {
        echo "<p>Glub glub glub...</p>";
    }
    public function soltarBolha() {
        echo "<p>Glup glup bolhas...</p>";
    }

    // Métodos Getters
    public function getCorEscama() {
        return $this->corEscama;
    }
    
    // Métodos Setters
    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}
?>