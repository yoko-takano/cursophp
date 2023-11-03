<?php 
require_once "Controlador.php";
    class ControleRemoto implements Controlador {
        private $volume;
        private $ligado;
        private $tocando;

        public function __construct(){
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocando(false);
        }
        private function getVolume(){
            return $this->volume;
        }
        private function getLigado(){
            return $this->ligado;
        }
        private function getTocando(){
            return $this->tocando;
        }
        private function setVolume($volume){
            $this->volume = $volume;
        }
        private function setLigado($ligado){
            $this->ligado = $ligado;
        }
        private function setTocando($tocando){
            $this->tocando = $tocando;
        }
        public function ligar() {
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo "<br>~~~~~~~~~~~~~~ Menu ~~~~~~~~~~~~~~";
            echo "<br>Status atual: " . ($this->getLigado()?"Ligado":"Desligado");
            echo "<br>Está tocando: " . ($this->getTocando()?"Sim": "Não");
            echo "<br>Volume: " . $this->getVolume() . " ( ";
            for($i = 5; $i <= $this->getVolume(); $i += 5) {
                echo "|";
            }
            echo " )<br>";
        }
        public function fecharMenu(){
            echo "<br> Fechando Menu...";
        }
        public function maisVolume(){
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() + 5);
            } else {
                echo "<p> Erro: não é possível aumentar o volume. </p>";
            }
        }
        public function menosVolume(){
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() - 5);
            } else {
                echo "<p> Erro: não é possível diminuir o volume. </p>";
            }
        }
        public function ligarMudo() {
            if ($this->getLigado() && $this->getVolume() > 0) {
                $this->setVolume(0);
            }
        }
        public function desligarMudo() {
            if ($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }
        public function play() {
            if ($this->getLigado() && !($this->getTocando())) {
                $this->setTocando(true);
            }
        }
        public function pause() {
            if ($this->getLigado() && $this->getTocando()) {
                $this->setTocando(false);
            }
        }
    }
?>