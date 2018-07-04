<?php
	include "../../configDB.php";
	$id=$_GET['id'];
	$jenis=mysql_query("DELETE FROM hewan_jenis WHERE id_jenis='$id'");
	if ($jenis) {
		header('location:../index.php?p=jenis-hewan&message=Data-Berhasil');
	}else{
		header('location:../index.php?p=jenis-hewan&message=Data-Gagal');
	}
?>