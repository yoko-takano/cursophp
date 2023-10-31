<?php 
    class Caneta {

        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar() {
            if ($this->tampada == true) {
                echo "<p>Erro! Não posso rabiscar.</p>";
            } else {
                echo "Estou rabiscando!";
            }
        }
        public function tampar() {
            $this->tampada = true;
        }
        public function destampar() {
            $this->tampada = false;
        }
    }
?>