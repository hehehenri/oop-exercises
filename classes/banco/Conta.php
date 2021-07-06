<?php

class Conta
{
    public $numero;
    protected $tipo;
    private $nomePessoa;
    private $saldo;
    private $status;


    //Metodo Construtor


    public function __construct()
    {
        $this->status = false;
        $this->saldo = 0;
    }

    // Getters & Setters


    //Getter -> numero
    public function getNumero()
    {
        return $this->numero;
    }
    //Setter -> numero
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    //Getter -> tipo
    public function getTipo()
    {
        return $this->tipo;
    }
    //Setter -> tipo
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    //Getter -> nomePessoa
    public function getNomePessoa()
    {
        return $this->nomePessoa;
    }
    //Setter -> nome Pessoa
    public function setNomePessoa($nome)
    {
        $this->nomePessoa = $nome;
    }

    //Getter -> saldo
    public function getSaldo()
    {
        return $this->saldo;
    }
    //Setter -> saldo
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    //Getter -> status
    public function getStatus()
    {
        return $this->status;
    }
    //Setter -> status
    public function setStatus($status)
    {
        $this->status = $status;
    }


    //Metodos Especiais


    public function abrirConta($tipo)
    {
        switch ($tipo) {
            case "cp":
                $this->setTipo($tipo);
                $this->setSaldo(150);
                $this->setStatus(true);
                break;

            case "cc":
                $this->setTipo($tipo);
                $this->setSaldo(50);
                $this->setStatus(true);
                break;

            default:
                $this->setTipo(null);
                $this->setStatus(false);
                break;
        }
    }

    public function fecharConta()
    {
        //nao pode ter dinheiro nem debito, e a conta deve estar aberta
        if ($this->status && $this->saldo == 0) {
            $this->setStatus(false);
        } else if ($this->getSaldo() > 0) {
            echo "ERRO: Conta com dinheiro.";   //eu sei que não devo usar
        } else if ($this->getSaldo() < 0)         //echo em classes, mas ainda não
        {
            echo "ERRO: Conta em débito.";      //sei nada sobre tratar erros kkkk.
        } else if (!$this->getStatus())           //por enquanto vai ter que ser assim.
        {
            echo "ERRO: A conta ainda não está aberta.";
        }
    }

    public function depositar($valor)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
        } else {
            echo "ERRO: Não é possivel depositar.";
        }
    }

    public function sacar($valor)
    {
        if ($this->getStatus() && $this->getSaldo() >= $valor) {
            $this->setSaldo($this->getSaldo() - $valor);
        } else if (!$this->getStatus()) {
            echo "ERRO: Não é possivel sacar, conta fechada.";
        } else if ($this->getSaldo() < $valor) {
            echo "ERRO: Não é possivel sacar, saldo insuficiente.";
        }
    }

    public function pagarMensalidade()
    {

        switch ($this->getTipo()) {
                //conta poupança -> -20 reais
            case "cp":
                $mensalidade = 20;
                break;

                //conta corrente -> -12 reais        
            case "cc":
                $mensalidade = 12;
                break;
        }

        if ($this->getSaldo() >= $mensalidade && $this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $mensalidade);
        } else if (!$this->getStatus()) {
            echo "ERRO: Conta fechada.";
        } else if ($this->getSaldo() < $mensalidade) {
            echo "ERRO: Saldo insuficiente.";
        } else {
            echo "ERRO????";
        }
    }
}
