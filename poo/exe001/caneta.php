<?php 
    class Caneta {

        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        function rabiscar() {
            if ($this->tampada == true) {
                echo "<p>Erro! Não posso rabiscar.</p>";
            } else {
                echo "Estou rabiscando!";
            }
        }
        function tampar() {
            $this->tampada = true;
        }
        function destampar() {
            $this->tampada = false;
        }
    }
?>