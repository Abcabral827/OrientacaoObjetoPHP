<?php 
class Corrente extends Conta {
    public function __construct(
    private float $limite=0.00,
    int $banco,
    string $agencia, 
    string $conta,
    float $saldo 
    )
    {
    parent:: __construct(
        $banco,
        $agencia,
        $conta,
        $saldo
    ); 

    }
// --- ANIVERSARIO ---
public function getLimite(): int {
    return $this->limite;
    }   

public function setLimite(int $limite){
    $this->limite = $limite;
    }
    public function sacar ($valor){
        if($this->saldo + $this->limite >= $valor){
             parent:: sacar ($valor);
        }
    }
}
?>