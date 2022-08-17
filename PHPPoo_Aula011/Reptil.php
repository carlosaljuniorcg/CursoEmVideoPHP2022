<?php
require_once './Animal.php';
class Reptil extends Animal {
    //Atributos
    private $corEscama;
    
    //Métodos de sobrepor
    public function locomover() {
        echo "<p>Rastejando</p>";
    }
    public function alimentar() {
        echo "<p>Comendo vegetais</p>";
    }
    public function emitirSom() {
        echo "<p>Som de reptil</p>";
    }
    
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }


}
