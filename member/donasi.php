<?php 
include "../configDB.php";
$id = $_GET['id'];

date_default_timezone_set("Asia/Jakarta");
$date = date("Y-m-d");
$jenis = mysql_query("SELECT * FROM hewan WHERE id_hewan = '$id'") or die(mysql_error());
$a = mysql_fetch_array($jenis);
?>
<div class="modal-dialog">
    <div class="modal-content">
    	<form action="action/keranjang.php" method="post">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
		    </button>
		    <h2>Donasi</h2>
		  </div>
		<div class="modal-body">
			<p> Untuk mengadopsi hewan ini, Kamu harus mendonasikan minimal Rp. <?php echo $a['harga']; ?> untuk pemeliharaan dan administrasi. Setuju?</p>
			<?php 
			session_start();
				if (isset($_SESSION['id'])) {
					$user = mysql_query("SELECT * FROM user WHERE id_user = '".$_SESSION['id']."'");
					$b = mysql_fetch_array($user);
			?>
				<input type="hidden" name="id_user" value="<?php echo  $_SESSION['id'];?>">
				<input type="hidden" name="nama" value="<?php echo  $b['nama'];?>">
				<input type="hidden" name="email" value="<?php echo  $b['email'];?>">
				<input type="hidden" name="tlp" value="<?php echo  $b['tlp'];?>">
				<input type="hidden" name="alamat" value="<?php echo  $b['alamat'];?>">
			<?php
				}	
			?>
				<input type="hidden" name="tgl" value="<?php echo  $date;?>">
				<input type="hidden" name="id_hewan" value="<?php echo  $a['id_hewan'];?>">
				<input type="hidden" name="image" value="<?php echo  $a['image'];?>">
				<input type="hidden" name="jenis" value="<?php echo  $a['jenis_hewan'];?>">
				<input type="hidden" name="ras" value="<?php echo  $a['ras'];?>">
				<input type="hidden" name="umur" value="<?php echo  $a['umur'];?>">
				<input type="hidden" name="kelamin" value="<?php echo  $a['kelamin'];?>">
				<input type="hidden" name="harga" value="<?php echo  $a['harga'];?>">
				<input type="hidden" name="kode" >
        </div>
		  <div class="modal-footer">
		    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
		    <input type="submit" name="submit" class="btn btn-success" value="Setuju">
		  </div>
		</form>
	</div>
</div>
