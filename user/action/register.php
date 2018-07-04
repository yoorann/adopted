<?php 
include '../../configDB.php';

if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pin = md5($_POST['pin']);
	$tlp = $_POST['tlp'];
	$alamat = $_POST['alamat'];

	$insert = mysql_query("INSERT INTO user VALUES('','$nama','$email','$pin','$tlp','$alamat')") or die(mysql_error());
	if ($insert) {
		header("location:../index.php?message=Data-Berhasil-Silahkan-Login");
	}else{
		header("location:../index.php?a=404&message=Data-Gagal");
	}
}
 ?>