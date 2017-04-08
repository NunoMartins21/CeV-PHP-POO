<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    // Atributos
    private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;
    
    // Métodos Abstratos
    public function like() {
        $this->setCurtidas($this->getCurtidas() + 1);
    }

    public function pause() {
       $this->setReproduzindo(false);
    }
        
    public function play() {
        $this->setReproduzindo(true);
    }
    
    // __construct()
    public function __construct($titulo) {
        $this->setTitulo($titulo);
        $this->setAvaliacao(1);
        $this->setCurtidas(0);
        $this->setViews(0);
        $this->setReproduzindo(false);
    }
    
    // Getters e Setters
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function getViews() {
        return $this->views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAvaliacao($avaliacao) {
        $media = ($this->avaliacao + $avaliacao) / $this->views;
        $this->avaliacao = $media;
    }

    public function setViews($views) {
        $this->views = $views;
    }

    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }
}
