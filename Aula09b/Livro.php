<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';
class Livro implements Publicacao {
    // Atributoss
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    // Métodos
    public function detalhes() {
        echo "<hr>Livro: '" . $this->getTitulo() . "', escrito por " . $this->getAutor();
        echo "<br>Total de páginas: " . $this->getTotPaginas();
        echo "<br>Página atual: " . $this->getPagAtual();
        echo "<br>Leitor: " . $this->leitor->getNome();
    }
    
    // __construct();
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->setAberto(false);
        $this->setPagAtual(0);
    }
    
    // Métodos Getters e Setters
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    // Métodos Abstratos
    public function abrir() {
        $this->setAberto(true);
    }

    public function avancarPag() {
        $this->setPagAtual($this->getPagAtual() + 1);
    }

    public function fechar() {
        $this->setAberto(false);
    }

    public function folhear($p) {
        if ($p > $this->getTotPaginas()) {
            $this->setPagAtual($this->getPagAtual() - 0);
        }
        else {
            $this->setPagAtual($p);
        }
    }

    public function voltarPag() {
        $this->setPagAtual($this->getPagAtual() - 1);
    }
}
