<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="left-sidebar">
				<h2>Category</h2>
				<div class="panel-group category-products" id="accordian"><!--category-productsr-->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<?php 
									$i = 1;
									$jenis = mysql_query("SELECT * FROM hewan_jenis GROUP BY jenis");
									while ($n = mysql_fetch_array($jenis)) {
									?>
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
										<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										<a href="#" id="<?php echo $jenis;?>"> <?php echo $n['jenis']; ?></a>
									</a>
								</h4>
							</div>
							<div id="sportswear <?php $i++; ?>" class="panel-collapse collapse">
								<div class="panel-body">
									<ul>
										<?php 
											$id = $_GET['id'];
											$ras = mysql_query("SELECT * FROM hewan WHERE jenis = '$id'");
											while ($r = mysql_fetch_array($ras)) {
										?>
											<li><a href="index.php?a=data&jenis=<?php echo $id;?>&ras=<?php echo $r['ras']; ?>"><?php echo $r['ras']; ?> </a></li>
										<?php	
											}
										 ?>
										
										<li><a href="#">Under Armour </a></li>
										<li><a href="#">Adidas </a></li>
										<li><a href="#">Puma</a></li>
										<li><a href="#">ASICS </a></li>
									</ul>
								</div>
							</div>
									<?php
									}
								 ?>
					</div>
				</div><!--/category-products-->					
			</div>
		</div>
	</div>
</div>