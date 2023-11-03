<?php 
    class Pessoa {
        private $nome;
        private $idade;
        private $sexo;

        // Métodos Gerais
        public function fazerAniv() {
            $this->setIdade($this->getIdade()+1);
        }

        // Método Construtor
        public function __construct() {
            
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