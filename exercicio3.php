<?php

echo "<pre>";
echo "<p>";
echo "Exercício 2 – Array associativo";
echo "<p>";


$formatar = array("inteiros" => 10, 
					"inteiros2" => 20, 
					"real" => 3.14, 
					"real2" => 4.5, 
					"string" => 'jose',
					"string2" => 'maria', 
					"caracter" => 'a',
					"caracter"=> 'b', 
					"bolean" => 'true',
					"bolean" => 'false');
echo "<p>";

print_r($formatar);


echo "<pre>";
echo "<p>";
echo "Exercício 2 – Array associativo FOREACH";
echo "<p>";
foreach($formatar as $key => $value) {
	echo $key. ": ".$value;
	echo "<br>";
	
}
?>