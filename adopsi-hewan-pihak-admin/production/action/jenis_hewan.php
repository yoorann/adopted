<?php 
include '../../configDB.php';

if (isset($_POST['submit'])) {
	$jenis = $_POST['jenis'];
	$ras = $_POST['ras'];
	$artikel = $_POST['artikel'];
	$rawat = $_POST['rawat'];

	$query = mysql_query("INSERT INTO hewan_jenis VALUES ('','$jenis','$ras','$artikel','$rawat')") or die(mysql_error());

	if ($query) {
		header("location:../index.php?p=jenis-hewan&message=data-berhasil");
	}else{
		header("location:../index.php?p=jenis-hewan&message=data-gagal");
		echo "<script>alert('Data Gagal disimpan')</script>";
	}
}

 ?>