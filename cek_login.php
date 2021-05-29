<?php
include("konekin.php");

if (isset($_POST['signin'])) {
	//ambil data dari formulir
	$username = $_POST['username'];
	$password = $_POST['password'];
	$usernamedb = "select username from login where username='$username'";
	$passworddb = "select password from login where password='$password'";
	$usernamedb2 = mysqli_query($db, $usernamedb);
	$passworddb2 = mysqli_query($db, $passworddb);
	$admin = "admin";
	$passadmin = "admin";

	if ($username == $admin && $password == $passadmin) {
		header('Location: admin/index.php');
	} elseif ($usernamedb2 && $passworddb2) {
		header('Location: home.php?username='.$username);
		$_SESSION["username"] = $username;
	} else {
		header('Location: index.php');
	}

} else{
	die("Access denied...");
}

?>