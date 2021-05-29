<?php

$server = "localhost";
$user = "root";
$password = "";
$database_name = "silakos";

$db = mysqli_connect($server, $user, $password, $database_name);

if (!$db) {
	die("Failed to reach the database: ".mysqli_connect_error());
}

?>