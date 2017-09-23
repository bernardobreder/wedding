<?php include "connection.php" ?>
<?php
	$id = $_GET["id"];
	$name = $_GET["name"];
	$email = $_GET["email"];
	mysql_query("insert into book (product_id, name, email) values ($id, '$name', '$email')");
?>