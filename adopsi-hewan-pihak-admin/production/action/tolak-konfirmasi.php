<?php 
include '../../configDB.php';

if (isset($_POST['submit'])) {
	$id = $_POST['id'];
 $masuk = mysql_query("DELETE FROM adopsi WHERE id = '$id'");
 if ($masuk) {
 		header("location:../index.php?p=adopsi&message=berhasil-konfirmasi");
 	}else{
 	header("location:../index.php?p=adopsi&message=gagal-konfirmasi");
 	}	
}
 ?>
 
