<?php 
require_once "Aluno.php";
class Tecnico {
    private $registroProfissional;

    // Métodos Gerais
    public function praticar() {

    }

    // Métodos Getters
    public function getRegistroProfissional() {
        return $this->registroProfissional;
    }

    // Métodos Setters
    public function setRegistroProfissional($registroProfissional) {
        $this->registroProfissional = $registroProfissional;
    }
}
?>