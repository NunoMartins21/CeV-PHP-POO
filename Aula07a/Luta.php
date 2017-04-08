<?php
require_once 'Lutador.php';
class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    // Métodos Especiais
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }
    
    // Métodos
    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
            $this->aprovada = true;
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        }
        else {
            $this->aprovada = false;
            $this->setDesafiado(null);
            $this->setDesafiante(null); 
        }
    }
    public function lutar() { // Compor
        if ($this->getAprovada()) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor) {
                case 0:
                    echo "<p>Empatou!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo $this->desafiado->getNome() . " ganhou!";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo $this->desafiante->getNome() . " ganhou!";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        }
        else {
            echo "Luta não pode acontecer!";
        }
    }
}