<?php
	class Produto
	{
		public function __construct(
			private int $id_produto = 0,
			private string $nome = "",
			private float $preco = 0.00,
            private array $fornecedores = array()
			){}
			
		public function getId_produto()
		{
			return $this->id_produto;
		}
		
		public function getNome()
		{
			return $this->nome;
        }
		public function getPreco()
		{
			return $this->preco;
		}

		//setters
		public function setId_produto($id_produto)
		{
			$this->id_produto = $id_produto;
		}
		
		public function setNome()
		{
			return $this->nome;
		}
		public function setPreco($preco)
		{
			$this->preco = $preco;
		}
	
		public function getFornecedores(){
            return $this->fornecedores;
        }
            
        
		
	}//fim da classe
?>