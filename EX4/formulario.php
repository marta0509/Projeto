<?php
	$dias = array("Domingo", "Segunda-Feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sabado" );

	$meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Meses & Dias</title>
	<meta charset="utf-8">
</head>
<body>
	<h4>Escolha Uma Opção</h4>

	<form action="captar.php" method="post">
		<select name="dia">
			<?php 
				foreach ($dias as $d => $dia) {
			?>
				<option value="<?php echo $d;?>"><?php echo $dia;?></option>
			<?php
				}
			?>	
		</select>
		<br><br>
		<select name="mes">
			<?php 
				foreach ($meses as $m => $mes) {
			?>
				<option value="<?php echo $m;?>"><?php echo $mes;?></option>
			<?php
				}
			?>	
		</select>
		<br><br>
		<input type="submit" name="enviar">
	</form>
</body>
</html>