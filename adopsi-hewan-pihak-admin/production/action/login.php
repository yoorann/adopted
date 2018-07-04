<?php 
include "../../configDB.php";

session_start();
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = MD5($_POST['password']);

	$query = mysql_query("SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
	$lvl = mysql_fetch_array($query);

	$_SESSION['username'] = $lvl['username'];
	$_SESSION['level'] = $lvl['level'];
	if ($lvl['level'] == 'admin') {
		header("location:../index.php");
	}else{
		die("Masukan data dengan benar!");
	}
}
 ?>