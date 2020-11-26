<?php
	$numeros = array();
	for ($i=0; $i < 15 ; $i++) 
	{ 
		$numeros[$i]=rand(1,1000);
		
		if($numeros[$i]%2==0) 
		{
			echo "O número que está na posição " .$i. " é " .$numeros[$i]."é PAR";
			echo"<br>";
		}
		else
		{
			echo "O número que está na posição " .$i. " é " .$numeros[$i]."é IMPAR";
			echo"<br>";
		}
}
?>