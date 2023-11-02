<?php 
    class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct() {
            $this->setStatus("inativo");
            $this->setSaldo(0);
        }
        public function abrirConta($tipo) {
            $this->setStatus("ativo");
            if ($tipo == "CC") {
                $this->setTipo("CC");
                $this->setSaldo(50);
            } elseif ($tipo == "CP") {
                $this->setTipo("CP");
                $this->setSaldo(150);
            } else {
                echo "<p>Entre com uma opção válida na abertura da conta.</p>";
            }
        }
        public function fecharConta() {
            if ($this->getSaldo() == 0) {
                $this->setStatus("inativo"); 
                echo "<p>Você desativou sua conta com sucesso.</p>";
            } elseif ($this->getSaldo() > 0) {
                echo "<p>Você ainda tem dinheiro na conta. Por favor, saque antes de desativar.</p>";
            } else {
                echo "<p>Seu saldo está negativo! Precisa quitar as dívidas antes de desativar.</p>";
            }
        }
        public function depositar($entrada) {
            if ($this->getStatus() == "ativo") {
                $this->setSaldo($this->getSaldo()+$entrada);
            } else {
                echo "<p>Você só pode depositar se tiver conta ativa.</p>";
            }
        }
        public function sacar($saida) {
            if ($this->getSaldo() >= $saida && $this->getStatus() == "ativo") {
                $this->setSaldo($this->getSaldo()-$saida);
            } else 
                echo "Você não tem saldo suficiente para o saque ou sua conta está desativada.</p>";
        }
        public function pagarMensal() {
            if ($this->getTipo() == "CC" && $this->getStatus() == "ativo" && $this->getSaldo() >= 12){
                $this->setSaldo($this->getSaldo()-12);
            } elseif ($this->getTipo() == "CP" && $this->getStatus() == "ativo" && $this->getSaldo() >= 20) {
                $this->setSaldo($this->getSaldo()-20);
            } else {
                echo "<p>Verifique se tem saldo suficiente na conta ou se ela está ativa para pagar a mensalidade.</p>";
            }
        }
        public function getnumConta() {
            return $this->numConta;
        }
        public function setnumConta($nc) {
            $this->numConta = $nc;
        }
        public function getTipo() {
            return $this->tipo;
        }
        public function setTipo($t) {
            $this->tipo = $t;
        }
        public function getDono() {
            return $this->dono;
        }
        public function setDono($d) {
            $this->dono = $d;
        }
        public function getSaldo() {
            return $this->saldo;
        }
        public function setSaldo($sal) {
            $this->saldo = $sal;
        }
        public function getStatus() {
            return $this->status;
        }
        public function setStatus($stt) {
            $this->status = $stt;
        }
    }
?>