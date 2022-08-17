<?php
abstract class Pessoa {
    //Atributos
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $esperiencia;
    
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->esperiencia = 0;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getEsperiencia() {
        return $this->esperiencia;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }

    public function setEsperiencia($esperiencia): void {
        $this->esperiencia = $esperiencia;
    }

        
    //Métodos
    protected function ganharExp($n) {
        $this->experiencia += $n;
    }
}
