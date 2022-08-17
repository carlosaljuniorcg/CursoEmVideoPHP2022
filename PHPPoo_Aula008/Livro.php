<?php
require_once './Pessoa.php';
require_once './publicacao.php';
class Livro implements publicacao {
    //Atributos
    private $titulo;
    private $autor;
    private $totPagins;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    //Métodos
    public function detalhes() {
        echo "<br>Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br> Páginas: " . $this->totPagins . " atual " . $this->pagAtual;
        echo "<br> Sendo lido por " . $this->leitor->getNome();
    }
    public function __construct($titulo, $autor, $totPagins, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPagins = $totPagins;
        $this->aberto = false;
        $this->pagAtual = 0; 
        $this->leitor = $leitor;
    }
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPagins() {
        return $this->totPagins;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotPagins($totPagins): void {
        $this->totPagins = $totPagins;
    }

    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = true;
    }
    public function avancarPag() {
        $this->pagAtual++;
    }
    public function fechar() {
        $this->aberto = false;
    }
    public function folhear($p) {
        if ($p > $this->totPagins) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }
    public function voltarPag() {
        $this->pagAtual --;
    }

}
