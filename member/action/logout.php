<?php 	
session_start();
include '../../configDB.php';
if (isset($_SESSION['id'])) {
session_destroy();
unset($_SESSION['id']);
header("location:../../index.php");
}
 ?>