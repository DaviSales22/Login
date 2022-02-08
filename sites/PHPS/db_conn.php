<?php

$sname= "localhost";
$unmae= "davi";
$password = "123";

$db_name = "site_db";
$money="100";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Conexão falhou!";
}