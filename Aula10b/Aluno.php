<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    private $matr;
    private $curso;
    
    // Métodos
    public function cancelarMatr() {
        echo "<p>Matrícula será cancelada!</p>";
    }
    
    // Métodos Getters e Setters
    public function getMatr() {
        return $this->matr;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatr($matr) {
        $this->matr = $matr;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }
}
