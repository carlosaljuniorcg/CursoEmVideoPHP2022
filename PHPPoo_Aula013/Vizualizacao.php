<?php
require_once './Video.php';
require_once './Gafanhoto.php';
class Vizualizacao {
    //Atributos
    private $espectador;
    private $filme;
    
    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filmes->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        
    }
    
    public function getEspectador() {
        return $this->espectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setEspectador($espectador): void {
        $this->espectador = $espectador;
    }

    public function setFilme($filme): void {
        $this->filme = $filme;
    }

    
    
    //Métodos
    public function avaliar() {
        
    }
    public function avaliarNota() {
        
    }
    public function avaliarPorc() {
        
    }
}
