<?php 
require_once "Pessoa.php";
class Aluno extends Pessoa { // final class Aluno extends Pessoa (...) - não pode ser herdada por outra classe (ou seja, é folha)

    // Herança para Diferença
    private $matricula;
    private $curso;

    // Métodos Gerais
    public function pagarMensal() { // public final function (método final - não pode ser sobreposto)
        echo "<p>Mensalidade do(a) aluno(a) " . $this->getNome() . " realizada com sucesso.</p>";
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