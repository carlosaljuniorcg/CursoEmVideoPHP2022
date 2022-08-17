<?php

class ContaBanco {
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    //Métodos
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true); 
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda tem dinheiro, não posso fecha-la.</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta está em débito. Impossível encerrar.</p>";
        } else {
            $this->setStatus(false);
            echo"<p>Conta de ".$this->getDono()." fechada com sucesso.</p>";
        }
    }
    public function depositar($sal) {
        if ($this->getStatus()) {
             $this->setSaldo($this->getSaldo() + $sal);
             echo "<p>Deposito de R$$sal na conta de ".$this->getDono().".</p>";
        } else{
            echo "<p>Conta fechada. Não consigo depositar.</p>";
        }
               
    }
    public function sacar($sal) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >=  $sal) {
                //$this->saldo = $this->saldo - $sal;
                $this->setSaldo($this->getSaldo() - $sal); 
                echo "<p>Saque de R$$sal autorizado na conta de ".$this->getDono().".</p>" ;
            } else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        } else {
            echo "<p>Não posso sacar de uma conta fechada.</p>"; 
        }
    }
    public function pagarMensal() {
        if($this->getTipo() == "CC") {
            $sal = 12;
        } else if ($this->getTipo() == "CP"){
            $sal = 20; 
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $sal);
            echo "<p>Mensalidade de R$$sal debitada na conta de ".$this->getDono().".</p>";
        } else {
            echo "<p>Problemas com a conta. Não posso cobrar.</p>"; 
        }
    }

    //Métodos especiais
    
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }
    
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($n): void {
        $this->numConta = $n;
    }

    public function setTipo($t): void {
        $this->tipo = $t;
    }

    public function setDono($d): void {
        $this->dono = $d;
    }

    public function setSaldo($sal): void {
        $this->saldo = $sal;
    }

    public function setStatus($s): void {
        $this->status = $s;
    }



    
}
