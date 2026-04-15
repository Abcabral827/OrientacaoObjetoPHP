<?php
class produto2 {

    public function __construct(
        public string $nome, 
        public float $preco)
    {

    }
    public function Exibir(){
        echo "<h1>$this->nome - $this->preco</h1><br>";

    }
}

?>