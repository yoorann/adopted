<?php 
session_start();
if (isset($_SESSION['id'])) {
	$user = mysql_query("SELECT * FROM adopsi WHERE aid_user = '".$_SESSION['id']."'");
if (mysql_num_rows($user) < 1) {
?>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<h1 class="text-center">Data Tidak tersedia</h1>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<?php 
}elseif(mysql_num_rows($user) >= 1){
	?>
<br>
<br>
<br>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Adopsi</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td>Item</td>
							<td>Jenis</td>
							<td colspan="3">Deskripsi</td>
							<td>Kode</td>
							<td>Status</td>
						</tr>
					</thead>
					<tbody>
						<?php 	
							while ($a =mysql_fetch_array($user)) {
						 ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="../adopsi-hewan-pihak-admin/production/images/pet/<?php echo $a['image'];?>" width="175" height="175" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $a['jenis_hewan'] ?></a></h4>
								<p><?php echo $a['ras']; ?></p>
							</td>
							<td class="cart_price" colspan="3">
								<label for="">Umur : </label> <?php echo $a['umur']; ?>
								<br>
								<label for="Kelamin"> Kelamin : </label> <?php echo $a['kelamin']; ?>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"> <?php 	echo $a['kode']; ?></p>
							</td>
							<td>
								<?php 
									if ($a['kode'] == "") {
								?>
									<p>Tunggu Konfirmasi</p>
								<?php
									}else{
								?>
									<p>Selesai</p>
								<?php
									}
								 ?>
							</td>
						</tr>
						<?php 	} ?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
<?php 
	}
} 
?>

<!-- Modal Popup untuk Edit--> 
<div id="modalKonfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>