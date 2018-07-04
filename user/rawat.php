<?php 
$hewan = $_GET['hewan'];
$jenis = $_GET['jenis'];
$ras = $_GET['ras'];
$cek = mysql_query("SELECT * FROM hewan WHERE id_hewan = '$hewan'");
$n = mysql_fetch_array($cek);

$artikel = mysql_query("SELECT * FROM hewan_jenis WHERE ras='$ras' AND jenis = '$jenis'");
$r = mysql_fetch_array($artikel);
 ?>

				<div class="col-sm-12 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="../adopsi-hewan-pihak-admin/production/images/pet/<?php echo $n['image'];?>" clas="text-center" width="100" height="100" alt="" />
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2> Deskripsi : </h2>
								<div class="">
									<div class="col-sm-6">
										<label for="Ras"> Jenis : </label> <?php echo $n['jenis_hewan']; ?>
										<br>
										<label for="Umur"> Umur : </label> <?php echo $n['umur']; ?>
									</div>
									<div class="col-sm-6">
										<label for="Ras"> Ras : </label> <?php echo $n['ras']; ?>
										<br>
										<label for="Kelamin"> Kelamin : </label> <?php echo $n['kelamin']; ?>
									</div>
								</div>
								<span>									
									<p><?php echo $n['deskripsi']; ?></p>
								</span>
								<br>
								<div class="">
									<div class="col-sm-9"></div>
									<div class="col-sm-3">
										<a href="#" data-toggle="modal" data-target="#login" class="btn btn-sm btn-default cart adopsi">Adopsi</a>
									</div>
								</div>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="index.php?a=detail&hewan=<?php echo $n['id_hewan'];?>&ras=<?php echo $n['ras'];?>&jenis=<?php echo $n['jenis_hewan']; ?>">Artikel</a></li>
								<li class="active"><a href="index.php?a=detail-rawat-aku&hewan=<?php echo $n['id_hewan'];?>&ras=<?php echo $n['ras'];?>&jenis=<?php echo $n['jenis_hewan']; ?>">Rawat aku</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<p>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $r['rawat']; ?>
									</p>
								</div>
							</div>
					</div><!--/category-tab-->					
				</div>
			</div>
		</div>


<!-- Modal Popup untuk Edit--> 
<div id="modalDonasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>