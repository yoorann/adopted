<?php 

include '../../configDB.php';

if (isset($_POST['submit'])) {
	$id = ($_POST['id']);
	$jenis = ($_POST['jenis']);
	$ras = ($_POST['ras']);
	$artikel = ($_POST['artikel']);
	$rawat = ($_POST['rawat']);

	$Karyawan = mysql_query("UPDATE hewan_jenis SET jenis = '$jenis' , ras = '$ras', artikel = '$artikel', rawat = '$rawat' WHERE id_jenis = '$id'") or die(mysql_error());

	if ($Karyawan) {
	header("location:../index.php?p=jenis-hewan");
	echo "<script>alert('Anda berhasil edit data.');</script>";
	}else{
	header("location:../index.php?p=jenis-hewan");
	echo "<script>alert('Anda gagagl edit data.');</script>";
	}
}
?>