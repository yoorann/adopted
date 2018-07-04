<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Adopsi Hewan</h3>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li> 
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">
          <p class="text-muted font-13 m-b-30 text-right"></p>
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr class="text-center">
                <td colspan="6">Data Hewan</td>
                <td colspan="5">Data User</td>
              </tr>
              <tr>
                <th>Tanggal</th>
                <th>Foto</th>
                <th>Jenis</th>
                <th>Ras</th>
                <th>Umur</th>
                <th>Kelamin</th>
                <td>Nama</td>
                <td>Email</td>
                <td>Telp</td>
                <td>Alamat</td>
                <td>Kode</td>
              </tr>
            </thead>
            <tbody>
              <?php 
                $hewan = mysql_query("SELECT * FROM adopsi");
                while ($b = mysql_fetch_array($hewan)) {
                  extract($b);
              ?>
              <tr>
                <td><?php echo $tanggal;?></td>
                <td><img src="images/pet/<?php echo $image; ?>" alt="" width="200" height="200"></td>
                <td><a href="index.php?p=laporan-adopsi-hewan&id=<?php echo $id;?>"><?php echo $jenis_hewan;?></a></td>
                <td><?php echo $ras;?></td>
                <td><?php echo $umur;?></td>
                <td><?php echo $kelamin;?></td>
                <td><?php echo $nama_user;?></td>
                <td><?php echo $email;?></td>
                <td><?php echo $telp;?></td>
                <td><?php echo $alamat;?></td>
                <td><?php 


                    if ($kode == "") {
                      ?>
                      <a type="button" href="#" class="btn btn-sm btn-primary konfirmasi" id="<?php echo $id;?>">Konfirmasi</a>
                      <a type="button" href="#" class="btn btn-sm btn-default batal" id="<?php echo $id;?>">Tolak</a>
                      <?php
                    }else{
                      echo $kode;
                    }
                 ?></td>
              </tr>
              <?php
                }
               ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

  </div>
</div>

<!-- Modal Popup untuk konfirmasi--> 
<div id="modalKonfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk Batal--> 
<div id="modalBatal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>