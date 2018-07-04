<div class="col-sm-3">
	<div class="left-sidebar">
		<h2>Category</h2>
		<div class="panel-group category-products" id="accordian"><!--category-productsr-->
			<?php 
				$jenis = mysql_query("SELECT * FROM jenis_hewan GROUP BY jenis");
				$i=1;
				while ($a = mysql_fetch_array($jenis)) {
			?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordian" href="#sportswear<?= $i ?>">
							<span class="badge pull-right"><i class="fa fa-plus"></i></span>
							<?php echo $a['jenis']; ?>
						</a>
					</h4>
				</div>
				<div id="sportswear<?= $i ?>" class="panel-collapse collapse">
					<div class="panel-body">
						<ul>
							<?php 
							$hewan = $a['jenis'];
							$ras = mysql_query("SELECT ras FROM jenis_hewan WHERE jenis = '$hewan'");
							while ($b = mysql_fetch_array($ras)) {
							?>
								<li><a href="index.php?a=data&pilih<?php echo $b['ras'];?>&jenis=<?php echo $a['jenis'];?>"><?php echo $b['ras']; ?> </a></li>
							<?php
							}
							 ?>
						</ul>
					</div>
				</div>
			</div>
			<?php 
			$i++;
					}
				?>
		</div><!--/category-products-->	
	</div>
</div>