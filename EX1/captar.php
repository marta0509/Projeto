<?php
	if (isset($_POST["txt_nome"])) {
		
		$num = $_POST["txt_nome"];
		
		switch ($num) {
			case ($num==1):
				echo " O dia da semana é Domingo.";
				break;
			
			case ($num==2):
				echo " O dia da semana é Segunda-feira.";
				break;

			case ($num==3):
				echo " O dia da semana é Terça-feira.";
				break;

			case ($num==4):
				echo " O dia da semana é Quarta-feira.";
				break;

			case ($num==5):
				echo " O dia da semana é Quinta-feira.";
				break;

			case ($num==6):
				echo " O dia da semana é Sexta-feira.";
				break;

			default:
				echo " O dia da semana é Sabado.";
				break;
		}
	}
?>