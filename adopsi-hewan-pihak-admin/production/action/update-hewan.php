<?php 
include '../../xconfigDB.php';

if (isset($_POST['submit'])) {
	
	$id = $_POST['id_hewan'];
	$jenis = $_POST['jenis'];
	$ras = $_POST['ras'];
	$lahir = $_POST['umur'];
	$kelamin = $_POST['kelamin'];
	$deskripsi = $_POST['deskripsi'];
	$harga = $_POST['harga'];


	if (isset($_POST['ganti'])) {
		$image = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];
		$path = "../images/pet/".$image;
		$ekstensi = array('png','jpg' );

		if (move_uploaded_file($tmp, $path)) {
			$x = explode('.',$image);
			$extensi = strtolower(end($x));
			if (in_array($extensi, $ekstensi) === true) {
				$query = mysql_query("UPDATE hewan SET image = '$image', jenis_hewan = '$jenis', ras = '$ras', umur = '$lahir', kelamin = '$kelamin', deskripsi = '$deskripsi', harga = '$harga' WHERE id_hewan = '$id'") or die(mysql_error());

				if ($query) {
					header("location:../index.php?p=data-hewan");
				}else{
					header("location:../index.php?p=data-hewan");
					echo "<script>alert('Data Gagal disimpan')</script>";
				}
			}
		}	
	}else{
		$query = mysql_query("UPDATE hewan SET jenis_hewan = '$jenis', ras = '$ras', umur = '$lahir', kelamin = '$kelamin', deskripsi = '$deskripsi', harga = '$harga' WHERE id_hewan = '$id'") or die(mysql_error());

			if ($query) {
				header("location:../index.php?p=data-hewan");
			}else{
				header("location:../index.php?p=data-hewan");
				echo "<script>alert('Data Gagal disimpan')</script>";
			}
	}	
}
 ?>