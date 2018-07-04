<div class="col-md-6 col-sm-6 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
		<h2>Recent Activities<small>Adoptions</small></h2>
		<ul class="nav navbar-right panel_toolbox">
		  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
		  </li>
		  <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
			<ul class="dropdown-menu" role="menu">
			  <li><a href="#">Settings 1</a>
			  </li>
			  <li><a href="#">Settings 2</a>
			  </li>
			</ul>
		  </li>
		  <li><a class="close-link"><i class="fa fa-close"></i></a>
		  </li>
		</ul>
		<div class="clearfix"></div>
	  </div>
	  <div class="x_content">
		<?php
			while($active= mysql_fetch_array($recent)){
				if ($active['kode'] == "") {
		?>
				<a href="index.php?p=adopsi"><h5 class="red"><?php echo $active['nama_user']." adopted ".$active['jenis_hewan']." ".$active['ras'] ?> <i class="fa fa-exclamation-circle"></i></h5></a>
		<?php			
				}else{
		?>
		<h5><?php echo $active['nama_user']." adopted ".$active['jenis_hewan']." ".$active['ras'] ?></h5>
		<hr>
		<?php
				}
			}
		?>
	  </div>
	  <a href="index.php?p=adopsi">more...</a>
	</div>
</div>