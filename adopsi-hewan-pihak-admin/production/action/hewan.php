<?php 
include '../../configDB.php';

if (isset($_POST['submit'])) {
	
	$ekstensi = array('png','jpg' );
	$image = $_FILES['image']['name'];
	$jenis = $_POST['jenis'];
	$ras = $_POST['ras'];
	$lahir = $_POST['umur'];
	$kelamin = $_POST['kelamin'];
	$deskripsi = $_POST['deskripsi'];
	$harga = $_POST['harga'];

	$x = explode('.',$image);
	$extensi = strtolower(end($x));
	$tmp = $_FILES['image']['tmp_name'];
	if (in_array($extensi, $ekstensi) === true) {
		move_uploaded_file($tmp, '../images/pet/'.$image);
		$query = mysql_query("INSERT INTO hewan VALUES ('','$image','$jenis','$ras','$lahir','$kelamin','$deskripsi','$harga')") or die(mysql_error());

		if ($query) {
			header("location:../index.php?p=data-hewan");
		}else{
			header("location:../index.php?p=data-hewan");
			echo "<script>alert('Data Gagal disimpan')</script>";
		}
	}
	

	
}

 ?>