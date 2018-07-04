<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Hewan</h3>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hewan"><i class="fa fa-plus"></i> Data </button>
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
                <th>Gambar</th>
                <th>Jenis</th>
                <th>Ras</th>
                <th>Umur</th>
                <th>kelamin</th>
                <th>Deskripsi</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $hewan = mysql_query("SELECT * FROM hewan");
                while ($b = mysql_fetch_array($hewan)) {
              ?>
              <tr>
                <td class="text-center"><img src="images/pet/<?php echo $b['image']; ?>" alt="" width="200" height="200"></td>
                <td><?php echo $b['jenis_hewan']; ?></td>
                <td><?php echo $b['ras']; ?></td>
                <td><?php echo $b['umur']; ?></td>
                <td><?php echo $b['kelamin']; ?></td>
                <td><?php echo $b['deskripsi']; ?></td>
                <td><a type="button" href="#" class="btn btn-sm btn-warning open-hewan"  id="<?php echo $b['id_hewan'];?>"><i class="fa fa-edit"></i><span class="text-muted"></span></a></td>
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
<div class="modal fade" id="hewan" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="action/hewan.php" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
          <h2>Hewan</h2>
        </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="Image" class="control-label col-md-3 col-sm-3 col-xs-12">Foto : </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="file" name="image" class="col-md-7 col-sm-7 col-xs-7"> 
            <p>jpg/png</p>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis : </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control jenis" name="jenis">
              <option> </option>
              <?php 
                $jenis = mysql_query("SELECT jenis FROM hewan_jenis GROUP BY jenis");
                while ($a = mysql_fetch_array($jenis)) {
              ?>
              <option value="<?php echo $a['jenis'];?>"><?php echo $a['jenis'];?></option>
              <?php
                }
               ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ras : </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control" name="ras" id="ras">
              <option></option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Umur : </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="radio" name="umur" value="bayi" > &nbsp; Bayi &nbsp;
            <input type="radio" name="umur" value="dewasa" > &nbsp; Dewasa &nbsp;
          </div>
        </div>
        <div class="form-group">
          <label for="Image" class="control-label col-md-3 col-sm-3 col-xs-12">Kelamin : </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div id="gender" class="btn-group" data-toggle="buttons">
              <label class="btn btn-default" name="kelamin" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="kelamin" value="jantan"> &nbsp; Jantan &nbsp;
              </label>
              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="kelamin" value="betina"> &nbsp; Betina &nbsp;
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="Image" class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi : </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea id="message" class="form-control" name="deskripsi" data-parsley-trigger="keyup" data-parsley-maxlength="100" data-parsley-validation-threshold="10"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="Image" class="control-label col-md-3 col-sm-3 col-xs-12">Donasi : </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="harga" class="col-md-7 col-sm-7 col-xs-7">
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
<div id="ModalHewan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

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