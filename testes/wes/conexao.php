<?php 

	$conect = @mysql_connect("localhost", "rost", "");

	if (!$conect) die ("falha na conexão com o banco de dados.".mysql_error());

	$db = mysql_select_db("nucleos");
	
	/*Configurando este arquivo, depois é só você dar um include em suas paginas php,
	isto facilita muito, pois caso haja necessidade de mudar seu Banco de Dados
	você altera somente um arquivo*/

?>