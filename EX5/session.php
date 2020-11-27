<?php
	session_start();
	if ($_SESSION['login']=="OK") 
	{
		echo "Você está numa area restrita";
	}
?>