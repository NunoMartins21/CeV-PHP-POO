<?php
class Lutador {
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    // Métodos
    public function apresentar() {
        echo "Lutador: $this->getNome()";
        echo "<br/>Origem: $this->getNacionalidade()";
        echo "<br/>$this->getIdade() anos";
        echo "<br/>$this->getAltura() m de altura";
        echo "<br/>Pesa $this->getPeso() kg";
        echo "<br/>Vitórias: $this->getVitorias()";
        echo "<br/>Derrotas: $this->getDerrotas()";
        echo "<br/>Empates: $this->getEmpates()";
    }
    
    public function status() {
        echo $this->getNome();
        echo "<br/>Peso $this->getCategoria()";
        echo "<br/>$this->getVitorias() vitórias";
        echo "<br/>$this->getDerrotas() derrotas";
        echo "<br/>$this->getEmpates() empates";
    }
    
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    // __construct()
    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }
    
    // Métodos Getters
    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    // Métodos Setters
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "Inválido";
        }
        elseif ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        }
        elseif ($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        }
        elseif ($this->getPeso() <= 120.2) {
            $this->categoria = "Médio";
        }
        else {
            $this->categoria = "Inválido";
        }
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }
}