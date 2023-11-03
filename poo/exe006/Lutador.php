<?php 
    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade, $altura, $peso;
        private $categoria, $vitorias, $derrotas, $empates;

        // Métodos
        public function apresentar() {
            echo "<h2>Player: " . $this->getNome() . "</h2>";
            echo "<p> Nacionalidade: " . $this->getNacionalidade() . "</p>";
            echo "<p> Idade: " . $this->getIdade() . "</p>";
            echo "<p> Altura: " . $this->getAltura() . "</p>";
            echo "<p> Peso: " . $this->getPeso() . "</p>";
            echo "<p> Categoria: " . $this->getCategoria() . "</p>";
            echo "<p> Vitorias: " . $this->getVitorias() . "</p>";
            echo "<p> Derrotas: " . $this->getDerrotas() . "</p>";
            echo "<p> Empates: " . $this->getEmpates() . "</p>";
        }
        public function status() {
            echo "<p> >> " . $this->getNome();
            echo " pesa um total de " . $this->getPeso() . " kg e tem " . $this->getVitorias() . " vitórias, " . $this->getDerrotas() . "<br> derrotas e " . $this->getEmpates() . " empates.</p>";
        }
        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1); 
        }
        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() +1);
        }
        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

        // Método Especial - Construct
        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }

        // Métodos Especiais - Setters
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }
        public function setIdade($idade) {
            $this->idade = $idade;
        }
        public function setAltura($altura) {
            $this->altura = $altura;
        }
        public function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria();
        }
        private function setCategoria() {
            if ($this->getPeso() < 52.2) {
                $this->categoria = "Inválido";
            } elseif ($this->getPeso() <= 70.3) {
                $this->categoria = "Leve";
            } elseif ($this->getPeso() <= 83.9) {
                $this->categoria = "Médio";
            } elseif ($this->getPeso() <= 120.2) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Inválido";
            }
        }
        public function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }
        public function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }
        public function setEmpates($empates) {
            $this->empates = $empates;
        }

        // Métodos Especiais - Getters
        public function getNome() {
            return $this->nome;
        }
        public function getNacionalidade() {
            return $this->nacionalidade;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function getAltura() {
            return $this->altura;
        }
        public function getPeso() {
            return $this->peso;
        }
        public function getCategoria() {
            return $this->categoria;
        }
        public function getVitorias() {
            return $this->vitorias;
        }
        public function getDerrotas() {
            return $this->derrotas;
        }
        public function getEmpates() {
            return $this->empates;
        }
    }
?>