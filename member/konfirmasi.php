<?php 
include "../configDB.php";
$id = $_GET['id'];
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
			<p> Jika kamu mengadopsi hewan ini, kamu sudah setuju dengan persyaratan yang sudah tertera. </p>

			<?php 

			$user = mysql_query("SELECT user.*, hewan.*, cart.* FROM cart INNER JOIN user ON user.id_user = cart.cid_user INNER JOIN  hewan ON hewan.id_hewan = cart.cid_hewan WHERE cart.cid_user = '$id'");
			while ($a = mysql_fetch_array($user)) {
				date_default_timezone_set("Asia/Jakarta");
				$date = date("d/m/Y");

			?>
			<?php echo $date; ?>
				<input type="text" name="tgl" value="<?php echo  $date;?>">
				<input type="text" name="nama" value="<?php echo  $a['nama'];?>">
				<input type="text" name="email" value="<?php echo  $a['email'];?>">
				<input type="text" name="tlp" value="<?php echo  $a['tlp'];?>">
				<input type="text" name="alamat" value="<?php echo  $a['alamat'];?>">
				<input type="text" name="image" value="<?php echo  $a['image'];?>">
				<input type="text" name="jenis" value="<?php echo  $a['jenis_hewan'];?>">
				<input type="text" name="ras" value="<?php echo  $a['ras'];?>">
				<input type="text" name="umur" value="<?php echo  $a['umur'];?>">
				<input type="text" name="kelamin" value="<?php echo  $a['kelamin'];?>">
				<input type="text" name="harga" value="<?php echo  $a['harga'];?>">
				<input type="text" name="kode" >
			<?php } ?>
        </div>
		  <div class="modal-footer">
		    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
		    <input type="submit" name="submit" class="btn btn-success" value="Konfirmasi">
		  </div>
		</form>
	</div>
</div>
