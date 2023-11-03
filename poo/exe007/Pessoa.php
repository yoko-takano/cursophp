<?php 
class Pessoa {

    private $nome;
    private $idade;
    private $sexo;

    // Métodos Públicos
    public function fazerAniver() {
        echo "<p>Feliz aniversário, " . $this->getNome() . "!</p>";
        $this->setIdade($this->getIdade() + 1);
    }

    // Método Construtor
    public function __construct($nome, $idade, $sexo) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    // Métodos Setters
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    // Métodos Getters
    public function getNome() {
        return $this->nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getSexo() {
        return $this->sexo;
    }
}
?>