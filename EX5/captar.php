<?php
	session_start();

	if(isset($_POST['nome'])&&isset($_POST['ano']))
	{
		$nome=$_POST['nome'];
		$ano=$_POST['ano'];

		//Saber se é maior de idade e se pode votar

		$maior=date('Y')-$ano;
		

		if ($maior>=18) 
		{
			echo "Você tem " .$maior. ", já podes votar.";
		}
		else
		{
			echo "Você tem " .$maior. ", ainda não podes votar.";
		}

		//ver se o nome é ana e do ano 2000

		if ($nome=="Ana"||$nome=="ana" && $ano=="2000") 
		{
			$_SESSION['login']="OK";
			echo "<br>";
			echo "<a href='session.php'>Login</a>";
		}
		/*else
		{
			echo "<br>";
			echo $_SESSION['login']="ERRO";
		}*/
	}
	else
	{
		echo "ERRO";
	}
?>