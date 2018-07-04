<?php 
include '../../configDB.php';

if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$id_hewan = $_POST['id_hewan'];
 	$kode = $_POST['kode'];
 $masuk = mysql_query("UPDATE adopsi SET kode = '$kode' WHERE id = '$id'");
 $hapus = mysql_query("DELETE FROM hewan WHERE id_hewan = '$id_hewan'");
 if ($hapus) {
 	if ($masuk) {
 		header("location:../index.php?p=adopsi&message=berhasil-konfirmasi");
 	}else{
 	header("location:../index.php?p=adopsi&message=gagal-konfirmasi");
 	}	
 }else{
 	header("location:../index.php?p=adopsi&message=gagal-hapus");
 }
}
 ?>
 
