<?php
require_once 'Animal.php';
class Ave extends Animal {
    // Atributos
    private $corPena;
    
    // Métodos Abstratos
    public function alimentar() {
        echo "<p>Comendo frutas</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Ave</p>";
    }

    public function locomover() {
        echo "<p>Voando...</p>";
    }
    
    // Métodos
    public function fazerNinho() {
        echo "<p>Construindo um ninho</p>";
    }
    
    // Getters e Setters
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }
}
