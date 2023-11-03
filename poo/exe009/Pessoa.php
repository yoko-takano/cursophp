<?php 

// Classe abstrata (abstract class): não pode ser instanciada.
// Só pode servir como progenitora.
abstract class Pessoa { 
    private $nome;
    private $idade;
    private $sexo;

    // Metódo Final (final function): Não pode ser sobrescrito pelas suas subclasses.
    // Ou seja, obrigatóriamente herdado.
    public final function fazerAniv(){
        $this->setIdade($this->getIdade()+1);
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
}
?>