<?php
require_once "produtos.class.php";
require_once "produtos2.class.php";
require_once "produtos3.class.php";
$produto1 = new produto();

$produto1 -> nome = "Lápis";
$produto1 -> preco = "0.50";

$produto2 = new produto2("a", 1.4);

$produto2->Exibir();
$produto3 = new produto3("agenda", 4.4);

echo $produto3->getNome() . "<br>";
$produto3->setNome("Agenda 2026");
echo $produto3->getNome() . "<br>";



#region vardump
/* echo "<pre>";
    var_dump($produto1);
echo "</pre>"; */

#endregion

#region vardump
/* echo "<pre>";
    var_dump($produto2);
echo "</pre>";
 */
#endregion

?>