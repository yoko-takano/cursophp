<?php 

require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao{

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    // Métodos Públicos
    public function detalhes() {
        echo "<br><h2>Ficha técnica do livro: </h2>";
        echo "<p>Título: " . $this->getTitulo() . "</p>";
        echo "<p>Autor: " . $this->getAutor() . "</p>";
        echo "<p>Total de páginas: " . $this->getTotPaginas() . "</p>";
        echo "<p>Página atual: " . $this->getPagAtual() . "</p>";
        echo "<p><em>O livro atualmente se encontra <strong>" . ($this->getAberto()?"aberto":"fechado") . "</strong>.</em></p>"; 
        echo "<p><em>Está sendo lido por " . $this->leitor->getNome() . ", tem " . $this->leitor->getIdade() . " anos e é do sexo " . $this->leitor->getSexo() . ".</em></p>"; 
    }

    // Métodos Públicos da Interface
    public function abrir(){
        if (!$this->aberto) { 
            echo "<p>Livro está fechado. Vamos abri-lo!</p>";
            $this->setAberto(true);
            $this->setPagAtual(1);
        } else {
            echo "<p>O livro já está aberto.</p>";
        }
    }
    public function fechar(){
        if ($this->aberto) {
            echo "<p>Livro está aberto. Vamos fechá-lo!</p>";
            $this->setAberto(false);
        } else {
            echo "<p>O livro já está fechado.</p>";
        }
    }
    public function folhear($pagina) {
        if ($this->aberto) {
            if ($pagina <= 0) {
                echo "<p>Não existe número de páginas negativo, doido!</p>";
            } elseif ($pagina >= $this->getTotPaginas()) {
                echo "<p>O livro tem " . $this->getTotPaginas() . " páginas, não tem como avançar além disso.</p>";
            } else {
                echo "<p>Você escolheu folhear até a página " . $pagina . ".</p>";
                $this->setPagAtual($pagina);
            }
        } else {
            echo "<p>O livro está fechado. Não é possível folhear.</p>";
        }
    }
    public function avancarPag(){
        if (!$this->aberto) {
            echo "<p>O livro precisa estar aberto para avançar a página.</p>";
        } elseif ($this->getPagAtual() == $this->getTotPaginas()) {
            echo "<p>Você já está na última página, não dá para avançar mais.</p>";
        } else {
            $this->setPagAtual($this->getPagAtual()+1);
            echo "<p>Avançou uma página! Agora está na página " . $this->getPagAtual() . ".</p>";
        }
    }
    public function voltarPag(){
        if (!$this->aberto) {
            echo "<p>O livro precisa estar aberto para voltar a página.</p>";
        } elseif ($this->getPagAtual() == 1) {
            echo "<p>Você já está na primeira página, não dá para voltar mais.";
        } else {
            $this->setPagAtual($this->getPagAtual()-1);
            echo "<p>Você voltou uma página! Agora está na página " . $this->getPagAtual() . "</p>";
        }
    }

    // Método Construtor 
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
       $this->setTitulo($titulo);
       $this->setAutor($autor);
       $this->setTotPaginas($totPaginas);
       $this->setPagAtual(0);
       $this->setAberto(false);
       $this->setLeitor($leitor);
    }

    // Métodos Setters
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function setAutor($autor) {
        $this->autor = $autor;
    }
    public function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }
    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }
    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }
    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    // Métodos Getters 
    public function getTitulo() {
        return $this->titulo;
    }
    public function getAutor() {
        return $this->autor;
    }
    public function getTotPaginas() {
        return $this->totPaginas;
    }
    public function getPagAtual() {
        return $this->pagAtual;
    }
    public function getAberto() {
        return $this->aberto;
    }
    public function getLeitor() {
        return $this->leitor;
    }
}
?>