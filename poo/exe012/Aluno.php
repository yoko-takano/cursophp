<?php 
require_once "Pessoa.php";
class Aluno extends Pessoa {
    private $login;
    private $totAssistido;

    // Métodos Gerais
    public function assistirMaisUm() {
        $this->setTotAssistido($this->getTotAssistido() + 1);
    }

    // Método Construtor
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->setLogin($login);
        $this->setTotAssistido(0);
    }

    // Métodos Getters
    public function getLogin() {
        return $this->login;
    }
    public function getTotAssistido() {
        return $this->totAssistido;
    }

    // Métodos Setters
    public function setLogin($login) {
        $this->login = $login;
    }
    public function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }
}
?>