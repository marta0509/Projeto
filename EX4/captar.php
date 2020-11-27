<?php
	$dias = array("Domingo", "Segunda-Feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sabado" );

	$meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

if (isset($_POST['dia'])&& isset($_POST['mes'])) {

	$dia=$_POST['dia'];
	$mes=$_POST['mes'];

	echo "O dia selecionado foi ". $dias[$dia];
	echo "<br>";
	echo "O mês selecionado foi ". $meses[$mes];
}

?>