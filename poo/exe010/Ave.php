<?php 
require_once "Animal.php";
class Ave extends Animal {
    private $corPena;
    public function locomover() {
        echo "<p>Voando alto...</p>";
    }
    public function alimentar() {
        echo "<p>Comendo frutinhas...</p>";
    }
    public function emitirSom(){
        echo "<p>Piu Piu Piu...</p>";
    }
    public function fazerNinho() {
        echo "<p>Fazendo ninho bonitinho...</p>";
    }
    // Métodos Getters 
    public function getCorPena() {
        return $this->corPena;
    }
    // Métodos Setters
    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }
}
?>