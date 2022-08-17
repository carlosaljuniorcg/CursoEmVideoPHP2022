<?php
require_once './Pessoa.php';
class funcionario extends Pessoa {
    //Atributos
    private $setor;
    private $trabalhando;
    
    //Métodos
    public function mudarTrabalho() {
        $this->trabalhando = ! $this->trabalhando;
    }
    //Métodos especiais
    public function getSetor() {
        return $this->setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setSetor($setor): void {
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando): void {
        $this->trabalhando = $trabalhando;
    }


}
