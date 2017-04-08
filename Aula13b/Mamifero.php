<?php
require_once 'Animal.php';
class Mamifero extends Animal {
    // Atributos
    private $corPelo;
    
    // Métodos Abstratos
    public function emitirSom() {
        echo "<p>Som de Mamífero</p>";
    }
    
    // Getters e Setters
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}
