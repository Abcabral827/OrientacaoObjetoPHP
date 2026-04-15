<?php 
class Poupanca extends Conta {
    public function __construct(
    private int $aniversario=0,
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
public function getAniversario(): int {
    return $this->aniversario;
}

public function setAniversario(int $aniversario){
    $this->aniversario = $aniversario;
}
}
?>