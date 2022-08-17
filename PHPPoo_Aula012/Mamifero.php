<?php
require_once './Animal.php';
class Mamifero extends Animal {
    protected $corPelo;
    
    public function emitirsom() {
        echo "<p>Som de mamifero</p>";
    }
}
