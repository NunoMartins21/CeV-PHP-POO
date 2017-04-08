<?php
abstract class Animal {
    // Atributos
    protected $peso;
    protected $idade;
    protected $membros;
    
    // Métodos
    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();
    
    // Getters e Setters
    public function getPeso() {
        return $this->peso;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getMembros() {
        return $this->membros;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setMembros($membros) {
        $this->membros = $membros;
    }
}
