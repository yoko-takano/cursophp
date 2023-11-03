<?php 
require_once "Pessoa.php";
class Professor extends Pessoa {
    private $especialidade;
    private $salario;

        // Métodos Gerais
        public function receberAumento($aumento) {
            $this->setSalario($this->getSalario() + $aumento);
        }

        // Métodos Getters
        public function getEspecialidade() {
            return $this->especialidade;
        }
        public function getSalario() {
            return $this->salario;
        }

        // Métodos Setters
        public function setEspecialidade($especialidade) {
            $this->especialidade = $especialidade;
        }
        public function setSalario($salario) {
            $this->salario = $salario;
        }
}
?>