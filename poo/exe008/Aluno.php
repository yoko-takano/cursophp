<?php 
require_once "Pessoa.php";
    class Aluno extends Pessoa {
        private $matricula;
        private $curso;

        // Métodos Gerais
        public function cancelarMatricula() {
            $this->setMatricula("Cancelado");
        }

        // Métodos Getters
        public function getMatricula() {
            return $this->matricula;
        }
        public function getCurso() {
            return $this->curso;
        }

        // Métodos Setters
        public function setMatricula($matricula) {
            $this->matricula = $matricula;
        }
        public function setCurso($curso) {
            $this->curso = $curso;
        }

    }
?>