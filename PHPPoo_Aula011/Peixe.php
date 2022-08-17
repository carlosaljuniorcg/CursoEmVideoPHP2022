<?php
require_once './Animal.php';
class Peixe extends Animal {
    //Atributos
    private $corEscama;
    
    //Métodos sobrepor
    public function locomover() {
        echo "<p>Nadando</p>";
    }
    public function alimentar() {
        echo "<p>Comendo substancias</p>";
    }
    public function emitirSom() {
        echo "<p>Peixe não faz som</p>";
    }
    
    //Método adicional
    public function soltarBolha() {
        echo "<p>Soltou um bolha</p>";
    }
    
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }


}
