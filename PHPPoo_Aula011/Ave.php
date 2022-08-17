<?php
require_once './Animal.php';
class Ave extends Animal {
    //Atributos
    private $corPena;
    
    //Métodos sobrepor
    public function locomover() {
        echo "<p>Voando</p>";
    }
    public function alimentar() {
        echo "<p>Comento frutas</p>";
    }
    public function emitirSom() {
        echo "<p>Som de ave</p>";
    }
    //Método adicional
    public function fazerNinho() {
        echo "<p>Construiu um ninho</p>";
    }
    
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena): void {
        $this->corPena = $corPena;
    }


}
