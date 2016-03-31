<?php
	$host = "localhost";
	$user = "adminwabBZLt";
	$pass = "ijURQcrM_epL";
	$banco = "testedemercado";
	
	$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());

	mysql_select_db($banco) or die(mysql_error());	
?>