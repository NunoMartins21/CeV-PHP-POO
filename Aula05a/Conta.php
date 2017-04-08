<?php
class ContaBanco {
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    // Métodos
    public function __construct() {
        $this->status = false;
        $this->saldo = 0;
    }
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($this->tipo == "CC") {
            $this->setSaldo(50);
        }
        elseif ($this->tipo == "CP") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta() {
        if ($this->saldo > 0) {
            echo "Conta com dinheiro";
        }
        else if ($this->saldo < 0) {
            echo "Conta em débito";
        }
        else {
            $this->setStatus(false);
        }
    }
    public function depositar($v) {
       if (getStatus()) {
           $this->setSaldo(getSaldo() + $v);
       }
       else {
           echo "Impossível depositar";
       }
    }
    public function sacar($v) {
        if (getStatus()) {
            if (getSaldo() > $v) {
                $this->setSaldo(getSaldo() - $v);
            }
            else {
                echo "Saldo insuficiente!";
            }
        }
        else {
            echo "Impossível sacar!";
        }
    }
    public function pagarMensal() {
        $v = 0;
        if (getTipo() == "CC") {
            $v = 12;
        }
        elseif (getTipo() == "CP") {
            $v = 20;
        }
        if (getStatus()) {
            if (getSaldo() > $v) {
                $this->setSaldo(getSaldo() - $v);
            }
            else {
                echo "Saldo insuficiente!";
            }
        }
        else {
            echo "Impossível pagar a mensalidade!";
        }
    }
    
    // Métodos Especiais
    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }
}
