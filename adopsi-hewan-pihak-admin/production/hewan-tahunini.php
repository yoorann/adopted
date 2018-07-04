<div class="col-md-6 col-sm-6 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
		<h2>This Year's Adoptions <small>Sessions</small></h2>
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
		<script src="chartjs/Chart.bundle.js"></script>
		<canvas id="myChart"></canvas>
		<script>
				var f=document.getElementById("myChart");
				var myChart = new Chart(f,{
					type:"line",
					data:{labels:["January","February","March","April","May","June","July","August","September","October","November","December"],
					datasets:[{
						label: "Pet adopted ",
						data:[<?php while ($data=mysql_fetch_array($jan)) {echo $data['jumlah'];} ?>, <?php while($data=mysql_fetch_array($feb)) {echo $data['jumlah'];} ?>, <?php while($data=mysql_fetch_array($mar)) {echo $data['jumlah'];} ?>, <?php while($data=mysql_fetch_array($apr)) {echo $data['jumlah'];} ?>, <?php while($data=mysql_fetch_array($may)) {echo $data['jumlah'];} ?>, <?php while($data=mysql_fetch_array($jun)) {echo $data['jumlah'];} ?>, <?php while($data=mysql_fetch_array($jul)) {echo $data['jumlah'];} ?>, <?php while($data=mysql_fetch_array($aug)) {echo $data['jumlah'];} ?>, <?php while($data=mysql_fetch_array($sep)) {echo $data['jumlah'];} ?>, <?php while($data=mysql_fetch_array($oct)) {echo $data['jumlah'];} ?>, <?php while($data=mysql_fetch_array($nov)) {echo $data['jumlah'];} ?>, <?php while($data=mysql_fetch_array($dec)) {echo $data['jumlah'];} ?>],
						backgroundColor:"rgba(38, 185, 154, 0.31)",
						borderColor:"rgba(38, 185, 154, 0.7)",
						pointBorderColor:"rgba(38, 185, 154, 0.7)",
						pointBackgroundColor:"rgba(38, 185, 154, 0.7)",
						pointHoverBackgroundColor:"#fff",
						pointHoverBorderColor:"rgba(220,220,220,1)",
						pointBorderWidth:1
					}]
					},
					options:{
						scales:{
							yAxes:[{
								ticks:{
									beginAtZero:!0
									}
								}]
							}
						}
					})
			</script>
	  </div>
	</div>
</div>