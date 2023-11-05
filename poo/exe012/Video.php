<?php 
require_once "AcoesVideo.php";
class Video implements AcoesVideo {
    
    // Atributos
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo; // true - play | false - pause

    // Método Construtor
    public function __construct($titulo) {
        $this->setTitulo($titulo);
        $this->setAvaliacao(1);
        $this->setViews(1);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }

    // Métodos Gerais
    public function play() {
        if (!$this->getReproduzindo()) {
            $this->setReproduzindo(true);
            echo "<p>O vídeo será reproduzido agora.</p>";            
        } else {
            echo "<p>O vídeo já está sendo reproduzido.</p>";
        }
    }
    public function pause() {
        if ($this->getReproduzindo()) {
            echo "<p>O vídeo será pausado agora.</p>";
        } else {
            echo "<p>O video já está pausado.</p>";
        }
    }
    public function like() {
        $this->setCurtidas($this->getCurtidas() + 1);
        echo "<p>Video curtido com sucesso!</p>";
    }

    // Métodos Getters
    public function getTitulo() {
        return $this->titulo;
    }
    public function getAvaliacao() {
        return $this->avaliacao;
    }
    public function getViews() {   
        return $this->views;
    }
    public function getCurtidas() {
        return $this->curtidas;
    }
    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    // Métodos Setters
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function setAvaliacao($avaliacao) {
        $media = ($this->avaliacao + $avaliacao) / $this->getViews();
        $this->avaliacao = $media;
    }
    public function setViews($views) {
        $this->views = $views;
    }
    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }
    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }
}
?>