<?php 
require_once "Pessoa.php";
    class Funcionario extends Pessoa {
        private $setor;
        private $trabalhando;

        // Métodos Gerais
        public function mudarTrabalho() {
            $this->setTrabalhando(!$this->getTrabalhando());
        }

        // Métodos Getters
        public function getSetor() {
            return $this->setor;
        }
        public function getTrabalhando() {
            return $this->trabalhando;
        }

        // Métodos Setters
        public function setSetor($setor) {
            $this->setor = $setor;
        }
        public function setTrabalhando($trabalhando) {
            $this->trabalhando = $trabalhando;
        }
    }
?>