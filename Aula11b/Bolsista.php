<?php
require_once 'Aluno.php';
class Bolsista extends Aluno {
    // Atributos
    private $bolsa;
    
    // Método
    public function renovarBolsa() {
        echo "<p>Bolsa renovada!</p>";
    }
    
    public function pagarMensalidade() {
        echo "<p><strong>" . $this->getNome() . "</strong> é bolsista, então paga com desconto!</p>";
    }
    
    // Getters e Setters
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }
}
