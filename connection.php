<?php
	$host = "mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/";
	$user = "adminwabBZLt";
	$pass = "ijURQcrM_epL";
	$banco = "testedemercado";
	
	$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());

	mysql_select_db($banco) or die(mysql_error());
	
?>