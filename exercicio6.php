<?php
echo "<p>";
echo "Exercicio 6";
echo "<pre>";
function operacao($array, $string, $escalar){
	for($i=0; $i<count($array); $i++){
		if ($string == "+"){
			$resultado[] = $array[$i] + $escalar;
		}
		else if ($string == "-") {
			$resultado [] = $array[$i] - $escalar;
		}
		else if ($string == "/"){
			$resultado [] = $array[$i] / $escalar; 
			
		}
		else if($string == "*"){
			$resultado [] = $array[$i] * $escalar;
		}
	}
	return $resultado;

}

$array = [1,2,3];
$resposta = operacao($array, "+", 3);
print_r($resposta);
?>