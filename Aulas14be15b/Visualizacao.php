<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao {
    // Atributos
    private $espectador;
    private $filme;
    
    // __construct()
    public function __construct($espectador, $filme) {
        $this->setEspectador($espectador);
        $this->setFilme($filme);
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }

    // Getters e Setters
    public function getEspectador() {
        return $this->espectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    public function setFilme($filme) {
        $this->filme = $filme;
    }
    
    // Métodos
    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }
    
    public function avaliarNota ($nota) {
        $this->filme->setAvaliacao($nota);
    }
    
    public function avaliarPorc($porc) {
        $nova = 0;
        if ($porc <= 20) {
            $nova = 3;
        }
        elseif ($porc <= 50) {
            $nova = 5;
        }
        elseif ($porc <= 90) {
            $nova = 8;
        }
        else {
            $nova = 10;
        }
        
        $this->filme->setAvaliacao($nova);
    }
}
