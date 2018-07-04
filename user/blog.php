<div class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
				<img src="images/b53f193f4705b95f12c7326753d737a4.jpg" class="img-fluid" alt="Responsive image" width="1175" height="350">
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<h1 class="text-center">Adopsi Hewan</h1>
			<hr>
			<h4>Selamat Datang!</h4>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petcare Academy adalah pusat adopsi hewan untuk Anda penyayang binatang.</p>
			<p>Kami membuat website ini untuk projek akhir supaya bisa mengikuti UN dengan lancar.</p>
			<p>Website ini terinspirasi dari permainan The Sims 3 Pets.</p>
			<p>Terimakasih ! Anda sudah mau membaca tulisan ini :v</p>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

<div class="container">
	<div class="row">
		<?php 
			$cek = mysql_query("SELECT * FROM hewan");
			if (mysql_num_rows($cek) < 1) {
			?>
			<div class="col-sm-9">
				<div class="features_items"><!--features_items-->
			
				</div>
			</div>	
			<?php
			}elseif (mysql_num_rows($cek) >= 1) { 
				?>
					<div class="col-sm-12">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">A d o p t &nbsp;&nbsp; M e</h2>
						<?php 
							$hewan = mysql_query("SELECT * FROM hewan GROUP BY jenis_hewan LIMIT 0,5");
							while ($b = mysql_fetch_array($hewan)) {
							extract($b);
						 ?>						
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<br>
									<!-- <div class="productinfo text-center"> -->
										<div class="text-center">
											<img src="../adopsi-hewan-pihak-admin/production/images/pet/<?php echo $image;?>" clas="text-center" width="175" height="175" alt="" />
										</div>
										<h3 class="text-center"><?php echo $jenis_hewan." ".$ras; ?></h3>
									<!-- </div> -->
									<p>&nbsp;&nbsp;Deskripsi </p>
									<p>&nbsp;&nbsp;Umur : <?php echo $umur; ?></p>
									<p>&nbsp;&nbsp;Jenis Kelamin : <?php echo $kelamin; ?></p>
									<p>&nbsp;&nbsp;Kelebihan Kekurangan : </p>
									<p>&nbsp;&nbsp;<?php echo $deskripsi; ?></p>
										<a href="index.php?a=detail&hewan=<?php echo $id_hewan;?>&ras=<?php echo $ras;?>&jenis=<?php echo $jenis_hewan; ?>" class="btn btn-default add-to-car col-md-12">Lihat aku...</a>
									<!-- <div class="product-overlay">
										<div class="overlay-content">
											<p>Deskripsi </p>
											<p>Umur : <?php echo $umur; ?></p>
											<p>Jenis Kelamin : <?php echo $kelamin; ?></p>
											<p>Kelebihan Kekurangan : </p>
											<p><?php echo $deskripsi; ?></p>
											<div class="text-center">
												<a href="#" class="btn btn-default add-to-cart" data-toggle="modal" data-target="#login">Adopsi Aku</a>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>	
			<?php
				}
			}
		 ?>
		
	</div>
</div>