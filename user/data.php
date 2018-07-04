<?php 
include 'menu.php';
if (!isset($_GET['pilih'] == false) && ($_GET['jenis'] == false)) {
	include 'hewan.php';
}else{
	include 'pilih.php';
}

 ?>