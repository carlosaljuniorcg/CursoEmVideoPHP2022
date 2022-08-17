<?php
require_once './Pessoa.php';
class Gafanhoto extends Pessoa {
    //Abributos 
    private $login;
    private $totAssistindo;
    
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistindo = 0;
        
    }
    
    public function getLogin() {
        return $this->login;
    }

    public function getTotAssistindo() {
        return $this->totAssistindo;
    }

    public function setLogin($login): void {
        $this->login = $login;
    }

    public function setTotAssistindo($totAssistindo): void {
        $this->totAssistindo = $totAssistindo;
    }

    
        
    public function viuMaisUm() {
        $this->totAssistindo ++;
    }
}
