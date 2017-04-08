<?php
require_once 'Animal.php';
class Peixe extends Animal {
    // Atributos
    private $corEscama;
    
    // Métodos Abstratos
    public function alimentar() {
        echo "<p>Comendo substâncias</p>";
    }

    public function emitirSom() {
        echo "<p>Peixe não faz som</p>";
    }

    public function locomover() {
        echo "<p>Nadando</p>";
    }

    // Getters e Setters
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    // Métodos
    public function soltarBolha() {
       echo "<p>Soltou uma bolha</p>"; 
    }
}
