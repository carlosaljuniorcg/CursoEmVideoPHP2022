<?php
require_once './Pessoa.php';
class Aluno extends Pessoa {
    //Atributos
    private $matr;
    private $curso;
    
    //Métodos
    public function cancelarMatr() {
        echo "<p>Matricula será cancelada</p>";
    }
    //Métodos especiais
    public function getMatr() {
        return $this->matr;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatr($matr): void {
        $this->matr = $matr;
    }

    public function setCurso($curso): void {
        $this->curso = $curso;
    }


}
