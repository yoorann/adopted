<?php 
include "../configDB.php";
$id = $_GET['id'];
$jenis = mysql_query("SELECT * FROM adopsi WHERE id = '$id'") or die(mysql_error());
$a = mysql_fetch_array($jenis);

function kodeRandom($length = 15){
 	$char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 	$charLength = strlen($char);
 	$random = '';
 	for ($i = 0; $i < $length; $i++ ){
 		$random .= $char[rand(0, $charLength - 1)]; 
 	} return $random;
 }

?>

<div class="modal-dialog">
    <div class="modal-content">
    	<form action="action/kode.php" method="post">
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
					<input type="hidden" name="id_hewan" value="<?php echo $a['aid_hewan'];?>">
					<input type="hidden" name="kode" value="<?php echo kodeRandom();?>">
				</div>	
			</div>
        </div>
		  <div class="modal-footer">
		    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
		    <input type="submit" name="submit" class="btn btn-success" value="Konfirmasi">
		  </div>
		</form>
	</div>
</div>