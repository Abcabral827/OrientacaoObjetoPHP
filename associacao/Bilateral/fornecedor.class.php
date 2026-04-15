<?php
	class fornecedor
	{
		public function __construct(
			private int $id_fornecedor = 0,
			private string $razao_social = "",
			private string $cnpj = "",
            private array $produtos = array()
			){}
			
		public function getId_fornecedor()
		{
			return $this->id_produto;
		}
		
		public function getRazao()
		{
			return $this->razao_social;
		}
		
		public function getCnpj()
		{
			return $this->cnpj;
		}

		
		//setters
		public function setId_Fornecedor($id_fornecedor)
		{
			$this->$id_fornecedor = $id_fornecedor;
		}
		
		public function setRazao()
		{
			return $this->$razao_social;
		}

		public function setCnpj($preco)
		{
			$this->cnpj = $cnpj;
		}

        public function getProdutos(){
            return $this->produtos;
        }
		
		
	}//fim da classe
?>