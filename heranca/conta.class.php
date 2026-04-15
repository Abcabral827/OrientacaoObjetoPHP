<?php 
class Conta {
    public function __construct(
        protected int $banco = 0,
        protected string $agencia = "",
        protected string $conta = "", 
        protected float $saldo = 0.00
    ){}

    // --- BANCO ---
    public function getBanco(): int {
        return $this->banco;
    }

    public function setBanco(int $banco) {
        $this->banco = $banco;
    }

    // --- AGENCIA ---
    public function getAgencia(): string {
        return $this->agencia;
    }

    public function setAgencia(string $agencia) {
        $this->agencia = $agencia;
    }

    // --- CONTA ---
    public function getConta(): string {
        return $this->conta;
    }

    public function setConta(string $conta)  {
        $this->conta = $conta;
    }

    // --- SALDO ---
    public function getSaldo(): float {
        return $this->saldo;
    }

    public function setSaldo(float $saldo) {
        $this->saldo = $saldo;
    }


      public function depositar(float $valor) 
    {
        if($valor <= 0){
            echo "Valor inválido";
        }
        else
        {
        $this->saldo += $valor;
        return $this->saldo;
        }
    }
       public function sacar ($valor){
        $this->saldo-=$valor;
    }

}
?>