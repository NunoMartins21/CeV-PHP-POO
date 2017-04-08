<?php
require_once 'Animal.php';
class Reptil extends Animal {
    private $corEscama;
    
    // Métodos Abstratos
    public function alimentar() {
        echo "<p>Comendo vegetais</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Réptil</p>";
    }

    public function locomover() {
        echo "<p>Rastejando</p>";
    }

    // Getters e Setters
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}
