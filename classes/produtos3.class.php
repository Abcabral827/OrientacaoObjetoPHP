<?php
class produto3 {

    public function __construct(
        private string $nome, 
        private float $preco)
    {

    }
    public function Exibir(){
        echo "<h1>$this->nome - $this->preco</h1><br>";

    }

    public function getNome(){
        return $this->nome;
    }

      public function getPreco(){
        return $this->preco ;
    }

    public function setNome(string $nome){
        $this->nome = $nome ;
    }

     public function setPreco(float $preco){
        $this->preco = $preco;
    }

}

?>