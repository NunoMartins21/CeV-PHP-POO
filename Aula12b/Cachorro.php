<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero {
    // Métodos
    public function enterrarOsso() {
        
    }
    
    public function abanarRabo() {
        
    }
    
    // Métodos Sobrepostos
    public function emitirSom() {
        echo "<p>Au! Au! Au!</p>";
    }
}
