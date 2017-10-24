<?php
	include "conexao.php";
	$nome = $_POST['nomep'];
	$email = $_POST['emailp'];
	$senha = $_POST['senhap'];
	$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
	mysql_query($sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>