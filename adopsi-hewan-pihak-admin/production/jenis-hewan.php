<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Jenis Hewan</h3>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jenis"><i class="fa fa-plus"></i> Data </button>
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
              <tr>
                <th>Jenis Hewan</th>
                <th>Ras</th>
                <th>Artikel</th>
                <th>Cara Rawat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $jenis = mysql_query("SELECT * FROM hewan_jenis");
                while ($b = mysql_fetch_array($jenis)) {
              ?>
              <tr>
                <td><?php echo $b['jenis']; ?></td>
                <td><?php echo $b['ras']; ?></td>
                <td><?php echo $b['artikel']; ?></td>
                <td><?php echo $b['rawat']; ?></td>
                <td><a type="button" href="#" class="btn btn-sm btn-warning open-modal" id="<?php echo $b['id_jenis'];?>"><i class="fa fa-edit"></i><span class="text-muted"></span></a> <a type="button" class="btn btn-sm btn-danger" onclick="confrim_modal('action/hapus-jenis.php?id=<?php echo $b['id_jenis'];?>');" href="#"><i class="fa fa-trash"></i><span class="text-muted"></span></a></td>
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


<!--  Modals Insert -->
<div class="modal fade" id="jenis" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <form method="POST" action="action/jenis_hewan.php" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
          <h2>Jenis Hewan</h2>
        </div>
      <div class="modal-body">

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis : </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" name="jenis" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ras : </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="last-name" name="ras" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Artikel : </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <textarea id="message" required="required" class="form-control" name="artikel" data-parsley-trigger="keyup"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Rawat : </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <textarea id="message" required="required" class="form-control" name="rawat" data-parsley-trigger="keyup"></textarea>
        </div>
      </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" name="submit" class="btn btn-success" value="Simpan Data">
        </div>
      </form>
    </div>
  </div>
  </div>
<!-- end Modals -->

<!-- Modal Popup untuk Edit--> 
<div id="ModalJenis" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete--> 
<div class="modal fade" id="hapus-jenis">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Hapus data? <br><small>Jika anda hapus data, data tidak bisa dikembalikan lagi</small></h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Hapus</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
<!-- end Modals -->