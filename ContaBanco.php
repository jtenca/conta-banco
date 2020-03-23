<?php
class ContaBanco {

    // ATRIBUTOS
    public $numConta;
    protected $tipoConta;
    private $donoConta;
    private $saldoConta;
    private $statusConta;

    //  MÉTODOS
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);

        // CC - Conta Corrente | CṔ - Conta Poupança
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta() {

        if ($this->getSaldo() > 0) {
            echo "Conta ainda possui saldo. IMPOSSÍVEL ENCERRAR.";
        } elseif ($this->getSaldo() < 0) {
            echo "Conta está em débito. IMPOSSÍVEL ENCERRAR.";
        } else {
            $this->setStatus(false);
        }
    }

    public function depositar($valor) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor)
        } else {
            echo "CONTA FECHADA."
        }
    }

    public function sacar($valor) {
        if ($this->getStatus()) {
            if ($this->getSaldo() > $valor) {
                $this->setSlado($this->getSaldo - $valor);
            } else {
                echo "SALDO INSUFICIENTE."
            }
        } else {
            echo "CONTA NÃO ESTÁ ABERTA."
        }
    }

    public function pagarMensal() {
        if ($this->getTipo()) == "CC" {
            $valor = 12;
        } elseif ($this->getTipo == "CP") {
            $valor = 20;
        } 
        
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $valor)
        } else {
            echo "PROBLEMAS COM A CONTA.";
        }
    }

    // MÉTODOS ESPECIAIS

    public function __construct() {

        $this->setSaldo(0);
        $this->setStatus(false);

        echo "CONTA CRIADA COM SUCESSO"

    }

    function getNumConta() {
        return $this->numConta;
    }

    function setNumConta($num) {
        $this->numConta = $num;

    }

    function getTipoConta() {
        return $this->tipoConta;
    }

    function setTipoConta($tipo) {
        $this->tipoConta = $tipo;
    }

    function getDonoConta() {
        return $this->donoConta;
    }

    function setDonoConta($dono) {
        $this->donoConta = $dono;
    }

    function getSaldoConta() {

        return $this->saldoConta;
    }

    function setSaldoConta($saldo) {
        $this->saldoConta = $saldo;
    }

    function getStatusConta() {
        return $this->saldoStatusConta;
    }

    function setStatusConta($status) {
        $this->statusConta = $status;
    }
}