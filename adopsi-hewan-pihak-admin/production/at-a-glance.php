<div class="col-md-12 col-sm-6 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
		<h2>Welcome to Petcare Academy!<small>At a Glance, There are</small></h2>
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
		<a href="#"><?php if(isset($adoptions['jumlah_adopsi'])<=0) {echo "0";}else{echo $adoptions['jumlah_adopsi'];}?> Adoptions</a><br>
		<a href="#"><?php if($pets['jumlah_hewan']<=0) {echo "0";} else{echo $pets['jumlah_hewan'];}?> (Unadopted) Pets available</a>
	  </div>
	</div>
</div>