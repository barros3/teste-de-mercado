<?php
	$login = isset($_POST["login"]) ? $_POST["login"] : '';
	$senha = isset($_POST["senha"]) ? $_POST["senha"] : '';
	$nome = isset($_POST["nome"]) ? $_POST["nome"] : '';
	$cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : '';
	$endereco = isset($_POST["endereco"]) ? $_POST["endereco"] : '';
	$email = isset($_POST["email"]) ? $_POST["email"] : '';
	$data_nascimento = isset($_POST["data_nascimento"]) ? $_POST["data_nascimento"] : '';
	$sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : '';
	
	$insert = "INSERT INTO test.usuario (login, senha, nome, cpf, endereco, email, data_nascimento, sexo) VALUES ('$login', '$senha','$nome', '$cpf', '$endereco', '$email', '$data_nascimento', '$sexo')" or die("insert falhou!!!!");

	$sql = mysql_query("$insert");

	 return header("Location:cadastraUsuario.php");

?>