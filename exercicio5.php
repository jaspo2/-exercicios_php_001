<?php
echo "<pre>";
function multiplicar_array_escalar($numeros, $escalar){
	for($i=0; $i<count($numeros); $i++){
		$resultado[$i] = $numeros[$i] * $escalar;
	}
	return $resultado;

}

$array = array(1, 2, 3);

echo "<pre>";

print_r($array);




echo "<p>";
$fim = multiplicar_array_escalar($array, 3);
echo "</pre>";
print_r($fim);
?>