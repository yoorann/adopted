<?php

if (isset($_POST['login'])) {
	session_start();
unset($_SESSION['sesi']);

include '../../configDB.php';

$username = $_POST['email'];
$password = md5($_POST['pin']);
/*
$username = mysql_real_escape_string($username); //utk pengaman , melindungi username dan passwordnya
$password = mysql_real_escape_string($password);

$username = addslashes($username);
$password = addslashes($password);*/

$querycekuser = mysql_query("SELECT * FROM user where email='$username' AND pin = '$password'"); // perintah select utk mengambil data ditabel 
$fetchuser = mysql_fetch_array($querycekuser);
$rowuser = mysql_num_rows($querycekuser);

if($rowuser > 0){ 
	$_SESSION['id'] = $fetchuser['id_user'];
	$_SESSION['nama'] = $fetchuser['nama'];
	$_SESSION['email'] = $fetchuser['email'];
	$_SESSION['pin'] = $fetchuser['pin'];
	header("location:../../member/index.php");
	}else{
		header("location:../index.php?a=404&message=Kesalahan");
	}
}
?>