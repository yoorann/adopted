<?php 
	$id = $_GET['id'];
	$hewan = mysql_query("SELECT  * FROM adopsi WHERE id = '$id'");
	$a = mysql_fetch_array($hewan);
 ?>
           <div class="">
                        
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Laporan <small>Adopsi Hewan</small> </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    	<h1>Data Pemilik </h1>
                    	<br>
                    	<table>
                    		<tr>
                    			<td class="col-sm-5"><h3>Nama</h3></td>
                    			<td class="col-sm-1"><h3> : </h3></td>
                    			<td class="col-sm-6 kode"><?php echo $a['nama_user']; ?></td>
                    		</tr>
                    		<tr>
                    			<td class="col-sm-5"><h3>E-mail</h3></td>
                    			<td class="col-sm-1"><h3> : </h3></td>
                    			<td class="col-sm-6 kode"><?php echo $a['email']; ?></td>
                    		</tr>
                    		<tr>
                    			<td class="col-sm-5"><h3>No. Tlp</h3></td>
                    			<td class="col-sm-1"><h3> : </h3></td>
                    			<td class="col-sm-6 kode"><?php echo $a['telp']; ?></td>
                    		</tr>
                    		<tr>
                    			<td class="col-sm-5"><h3>Kode</h3></td>
                    			<td class="col-sm-1"><h3> : </h3></td>
                    			<td class="col-sm-6 kode profile_title"><?php echo $a['kode']; ?></td>
                    		</tr>
                    		<tr>
                    			<td class="col-sm-5"><h3>Alamat</h3></td>
                    			<td class="col-sm-1"><h3> : </h3></td>
                    			<td class="col-sm-6 kode"><?php echo $a['alamat']; ?></td>
                    		</tr>
                    	</table>
						<!-- <div class="">
							<div class="col-sm-5">
								<br>
								<br>
								<br>
								<h1>Nama Pemilik </h1>
								<h1>Alamat  </h1>
								<h1>No. Telp </h1>
								<h1>E-mail </h1>
								<h1>Kode </h1>
							</div>
							<div class="col-sm-1">
								<br>
								<br>
								<br>
								<h1> : </h1>
								<h1> : </h1>
								<h1> : </h1>
								<h1> : </h1>
								<h1> : </h1>
							</div>
							<div class="col-sm-6">
								<br>
								<br>
								<br>
								<h1><?php echo $a['nama_user']; ?></h1>
								<h1><?php echo $a['alamat']; ?></h1>
								<h1><?php echo $a['telp']; ?></h1>
								<h1><?php echo $a['email']; ?></h1>
								<div class="profile_title">
								                          <h4>&nbsp;&nbsp;&nbsp;<?php echo $a['kode']; ?></h4>
								                        </div>
							</div>
						</div> -->
                        
                     </div>

                      <div class="col-md-2 col-sm-2 col-xs-12"></div>
                    
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="panel panel-default">
	            		<div class="panel-body">
	            			<h1>Data Hewan</h1>
		                      <div class="profile_img">
		                        <div id="crop-avatar">
		                          <!-- Current avatar -->
		                          <img class="img-responsive avatar-view" src="images/pet/<?php echo $a['image']; ?>" alt="Avatar" width="270" height="270">
		                        </div>
		                      </div>
		                      <h3><?php echo $a['jenis_hewan']." ".$a['ras']; ?></h3>

		                      <ul class="list-unstyled user_data detail-hewan">
		                        <li><label for=""> Umur : </label> 	<?php echo $a['umur']; ?>
		                        </li>

		                        <li>
		                          <label for=""> Kelamin : </label> <?php echo $a['kelamin'] ?>
		                        </li>

		                      </ul>
	            		</div>
                    </div>

                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>