<?php 
include '../../configDB.php';

if (isset($_POST['submit'])) {
	$id_user  =$_POST['id_user'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$tlp = $_POST['tlp'];
	$alamat = $_POST['alamat'];
	$tgl = $_POST['tgl'];
	$id_hewan = $_POST['id_hewan'];
	$image = $_POST['image'];
	$jenis = $_POST['jenis'];
	$ras = $_POST['ras'];
	$umur = $_POST['umur'];
	$kelamin = $_POST['kelamin'];
	$harga = $_POST['harga'];
	$kode = $_POST['kode'];

	$cek = mysql_query("SELECT * FROM adopsi WHERE aid_hewan = '$id_hewan'");
	if (mysql_num_rows($cek) > 1) {
		header('location:../index.php?a=404&message=Data-sudah-ada');
	}else{
		$masuk = mysql_query("INSERT INTO adopsi VALUES('','$tgl','$id_user','$nama','$email','$tlp','$alamat','$id_hewan','$image','$jenis','$ras','$umur','$kelamin','$harga','$kode')") or die(mysql_error());
			if ($masuk) {
			header("location:../index.php?a=adopsi");
			}else{
			header("location:../index.php?a=404&message=Data-tidak-dapat-di-input");
			}		
	}

	
	
}
 ?>