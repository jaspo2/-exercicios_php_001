<?php
echo "<pre>";
echo "<p>";
$pessoa1 = array("Nome"  =>  "jose",
				"Nif"   =>  123456789,
				"sexo"  =>  "masculino",
				"pais"   => "Portugal",
				"idioma" => "portugues");
				
				
echo "<p>";
$pessoa2 = array("Nome"  =>  "maria",
				"Nif"   =>  1230000000,
				"sexo"  =>  "feminino",
				"pais"   => "Brasil",
				"idioma" => "portugues-Br");
				
				
echo "<p>";
$pessoa3 = array("Nome"  =>  "matilde",
				"Nif"   =>  123456789,
				"sexo"  =>  "feminino",
				"pais"   => "Franca",
				"idioma" => "frances");
				
$pessoas = array($pessoa1, $pessoa2, $pessoa3);				
				
echo "<p>";
print_r($pessoas);



for($i=0; $i<count($pessoas); $i++){
	$pess = $pessoas[$i];
	foreach($pess as $key => $value){
		echo $key .": " . $value;
		echo "<br>";
	}
};

?>