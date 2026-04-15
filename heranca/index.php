<?php
require_once "conta.class.php";
require_once "corrente.class.php";
require_once "poupanca.class.php";
$conta1 = new Conta (1,"123-2", "12345-67", 1000);
echo"<pre>";
var_dump($conta1);
echo"</pre>";
echo$conta1->getBanco() . "<br>";

$corrente1 = new Corrente (500, 1, "345-1", "54321-87", 1500);

echo"<pre>";
var_dump($corrente1);
echo"</pre>";

echo $corrente1->getSaldo() . "<br>";
$retorno = $corrente1->depositar(100);
echo "$retorno<br>"
?>