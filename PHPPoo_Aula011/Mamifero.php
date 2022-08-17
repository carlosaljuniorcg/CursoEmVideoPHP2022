<?php
require_once './Animal.php';
class Mamifero extends Animal {
    //Atributos
    private $corPelo;
    
    //Métodos
    public function locomover() {
        echo "<p>Correndo</p>";
    }
    public function alimentar() {
        echo "<p>Mamando</p>";
    }
    public function emitirSom() {
        echo "<p>Som de mamífero</P>";
    }
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }


}

