<?php
	
	$maior=0;
	$menor=10001;
	$soma=0;
	$media=0;
	$produto=1;
	$numeros = array();
	for ($i=0; $i <20 ; $i++) 
	{ 
		$numeros[$i]=rand(1,10000);	

		echo $numeros[$i]." , ";
	}

	for ($i=0; $i <19 ; $i++) { 
		if ($numeros[$i]<$menor) 
		{
			$menor=$numeros[$i];
		}

		if ($numeros[$i]>$maior) 
		{
			$maior=$numeros[$i];
		}	

		//soma

		$soma=$soma+$numeros[$i];

		//media

		$media=$soma/20;

		//produto

		$produto=$numeros[$i]*$produto;
	}

	echo "<br>";
	echo "O maior número do array é: ". $maior;
	echo "<br>";
	echo "O menor número do array é: ". $menor;
	echo "<br>";
	echo "A média do array é: ". $media;
	echo "<br>";
	echo "O produto do array é: ". $produto;
?>