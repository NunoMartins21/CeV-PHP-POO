<?php
require_once 'Animal.php';
class Mamifero extends Animal {
    private $corPelo;
    
    // Métodos Abstratos
    public function alimentar() {
        echo "<p>Mamando</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Mamífero</p>";
    }

    public function locomover() {
        echo "<p>Correndo</p>";
    }
    
    // Getters e Setters
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}
