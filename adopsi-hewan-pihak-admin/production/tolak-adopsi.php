<?php 
include "../configDB.php";
$id = $_GET['id'];
$jenis = mysql_query("SELECT * FROM adopsi WHERE id = '$id'") or die(mysql_error());
$a = mysql_fetch_array($jenis);
?>

<div class="modal-dialog">
    <div class="modal-content">
    	<form action="action/tolak-konfirmasi.php" method="post">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
		    </button>
		    <h2>Konfirmasi</h2>
		  </div>
		<div class="modal-body">
			<h1 class="text-center"><?php echo $a['jenis_hewan']." ".$a['ras']; ?></h1>
			<div class="">
				<div class="col-sm-6"><img src="images/pet/<?php echo $a['image']; ?>" alt="" width="200" height="200"></div>
			<div class="col-sm-6">
				<p>Deskripsi</p>	 
				Umur : <?php echo $a['umur']; ?><br>
				Kelamin : <?php echo $a['kelamin']; ?><br>
				Donasi : <?php echo $a['harga']; ?>
				<input type="hidden" name="id" value="<?php echo $a['id'];?>">
			</div>	
			</div>
        </div>
		  <div class="modal-footer">
		    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
		    <input type="submit" name="submit" class="btn btn-success" value="Tolak">
		  </div>
		</form>
	</div>
</div>