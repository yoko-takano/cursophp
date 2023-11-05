<?php 
require_once "Video.php";
require_once "Aluno.php";
class Visualizacao {
    private $espectador;
    private $filme;
    
    // Métodos Gerais
    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorc($porc) {
        $nota = 0;
        if ($porc <= 20) {
            $nova = 3;
        } elseif ($porc <=50) {
            $nova = 5;
        } elseif ($porc <= 90) {
            $nova = 8;
        } else {
            $nova = 10;
        }   
        $this->filme->setAvaliacao($nota);
    }
    
    // Método Construtor
    public function __construct($espectador, $filme) {
        $this->setEspectador($espectador);
        $this->setFilme($filme);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1); // importante        
        $this->filme->setViews($this->filme->getViews() + 1); // importante 

    }

    // Métodos Getters
    public function getEspectador() {
        return $this->espectador;
    }
    public function getFilme() {
        return $this->filme;
    }

    // Métodos Setters
    public function setEspectador($espectador) {
        $this->espectador = $espectador;
    }
    public function setFilme($filme) {
        $this->filme = $filme;
    }
}
?>