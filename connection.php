<?php
	$db = mysql_connect("mysql.paulabernardo.com", "paulabernardo", "24813612");
	if (!$db) die("Não conseguiu conectar: " . mysql_error());
	$db_selected = mysql_select_db("paulabernardo", $db);
	if (!$db_selected) die ("Não pode selecionar o banco paulabernardo : " . mysql_error());
	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $db);
?>