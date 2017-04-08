<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa {
    // Atributos
    private $login;
    private $totAssistido;
    
    // Métodos
    public function assistirMaisUm() {
        $this->setTotAssistido($this->getTotAssistido() + 1);
    }
    
    // __construct()
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->setLogin($login);
        $this->setTotAssistido(0);
    }

    
    // Getters e Setters
    public function getLogin() {
        return $this->login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }
}
