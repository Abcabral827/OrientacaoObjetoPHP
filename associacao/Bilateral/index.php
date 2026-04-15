<?php
require_once("produto.class.php");
require_once("fornecedor.class.php");
$produto1 = new produto(1,"Produto 1", 10.50);
$produto2 = new produto(2,"Produto 2", 15.50);
$fornecedor = new fornecedor(1,"Empresa 1", "111111111",
array($produto1, $produto2));

//echo"<pre>";
//var_dump( $fornecedor );  
//echo"<pre>";    
//um lado da relação 
//uM fornecedor quais são os produtos que ele fornece

echo "Razão Social {$fornecedor->getRazao()} <br>";

echo "CNPJ {$fornecedor->getCnpj()} <br>";

echo "Produtos Fornecidos <br>";
foreach ($fornecedor->getProdutos() as $produto) {

    echo "Nome:{$produto->getNome()}<br>";
    
    echo "Preço:".number_format($produto->getPreco(),2,",",".")."<br>";
 }
?>

