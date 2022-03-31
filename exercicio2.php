<?php
echo "<p>";
echo "Exercício 2 – ALTERNATIVO CICLO FOR";
echo "<p>";
$elementos = array(10,20,3.14,4.5,'jose','maria','a','b',true,false);
echo "<p>";

echo "//Imprime um a um sem estrutura";
echo "<p>";
for ($i=0; $i<count($elementos); $i++){
	echo $elementos[$i];	
}
echo "<p>";
echo "Imprime um a um dentro de uma estrutura de arrays";
for ($i=0; $i<count($elementos); $i++){
	echo "[". $i ."] => " . $elementos[$i] . "<br>";
	
}
?>









