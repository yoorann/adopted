<?php 
if (!isset($_GET['pilih']== false)) {
}
$ras = $_GET['pilih'];
$jenis = $_GET['jenis'];
$hewan = mysql_query("SELECT * FROM jenis_hewan WHERE jenis = '%$jenis%' AND ras = '$ras'");
while ($a = mysql_fetch_array($hewan)) {
	extract($a);

?>
<div class="col-sm-9 padding-right">
			<div class="features_items"><!--features_items-->
				<h2 class="title text-center">A d o p t &nbsp;&nbsp; M e</h2>
				<?php 
					$hewan = mysql_query("SELECT * FROM hewan");
					while ($a = mysql_fetch_array($hewan)) {
					extract($a);
				 ?>
				 <form action="action/cart.php" method="post" enctype="multipart/form-data"></form>
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="../bismillah-admin/production/images/pet/<?php echo $image;?>" alt="" />
								<h3><?php echo $jenis_hewan." ".$ras; ?></h3>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-check-square-o"></i>Adopsi aku</a>
							</div>
							<div class="product-overlay">
								<div class="overlay-content">
									<?php 
									$user = mysql_query("SELECT * FROM user");
										$b = mysql_fetch_array($user);
									 ?>
									<p>Deskripsi </p>
									<p>Umur : <?php echo $umur; ?></p>
									<p>Jenis Kelamin : <?php echo $kelamin; ?></p>
									<p>Kelebihan Kekurangan : </p>
									<p><?php echo $deskripsi; ?></p>
									<div class="text-center">
										<a href="#" class="btn btn-default add-to-cart" data-toggle="modal" data-target="#login">Adopsi Aku</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php
		}
	}
 ?>
<?php
}
 ?>