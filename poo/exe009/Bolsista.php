<?php 
require_once "Aluno.php";
class Bolsista extends Aluno {
    private $bolsa;

    // Métodos Gerais
    public function renovarBolsa() {
        echo "<p>Bolsa renovada com sucesso!</p>";
    }

    public function pagarMensal() { // Sobreposição referente à superclasse
        echo "<p>" . $this->getNome() . " é bolsista, então terá desconto!</p>";
    }

    // Métodos Getters
    public function getBolsa() {
        return $this->bolsa;
    }

    // Métodos Setters
    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }
}
?>