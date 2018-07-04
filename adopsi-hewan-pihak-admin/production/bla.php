<?php 
$jenis = mysql_query("SELECT * FROM jenis_hewan");
$a = mysql_num_rows($jenis);
if ($a < 1) {
?>
<p> Data belum tersedia, Silahkan Tambah Data</p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <form method="POST" action="action/jenis_hewan.php" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
	                        <div class="modal-header">
	                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
	                          </button>
	                          <h2>Jenis Hewan</h2>
	                        </div>
                        <div class="modal-body">

	                      <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis : <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input type="text" name="jenis_hewan" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
	                        </div>
	                      </div>
	                      <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ras : <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input type="text" id="last-name" name="ras" required="required" class="form-control col-md-7 col-xs-12">
	                        </div>
	                      </div>
	                        </div>
	                        <div class="modal-footer">
	                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                          <button type="button" name="submit" class="btn btn-primary">Save changes</button>
	                        </div>
                      	</form>
                      </div>
                    </div>
                  </div>
<?php
}elseif ($a > 1) {
?>
<p class="text-muted font-13 m-b-30">
            <code>
              $().DataTables();
            </code>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
	                        <div class="modal-header">
	                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
	                          </button>
	                          <h2>Jenis Hewan</h2>
	                        </div>
                        <div class="modal-body">

	                      <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis : <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input type="text" name="jenis_hewan" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
	                        </div>
	                      </div>
	                      <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ras : <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input type="text" id="last-name" name="ras" required="required" class="form-control col-md-7 col-xs-12">
	                        </div>
	                      </div>
	                        </div>
	                        <div class="modal-footer">
	                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
	                          <button type="button" name="submit" class="btn btn-primary">Simpan</button>
	                        </div>
                      	</form>
                      </div>
                    </div>
                  </div>

          </p>
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Jenis Hewan</th>
                <th>Ras</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              	while ($b = mysql_fetch_array($query)) {
              		extract($b);
              ?>
              <tr>
              	<td><?php echo $jenis_hewan; ?></td>
              	<td><?php echo $ras; ?></td>
              	<td><a type="button" class="btn btn-primary" data-toggle=".edit_jenis" data-target=".edit-jenis" href="index.php?p=tables_dynamic&id=<?php echo $id;?>"><i class="fa fa-edit"></i> fa-edit <span class="text-muted"></span></a></td>
              </tr>
              <?php
              	}
               ?>
            </tbody>
          </table>


          <div class="edit_jenis fade edit-jenis" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <form method="POST" action="action/" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
	                        <div class="modal-header">
	                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
	                          </button>
	                          <h2>Jenis Hewan</h2>
	                        </div>
                        <div class="modal-body">

	                      <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis : <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input type="text" name="jenis_hewan" id="first-name" value="<?php echo $a['jenis_hewan'];?>" required="required" class="form-control col-md-7 col-xs-12">
	                        </div>
	                      </div>
	                      <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ras : <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input type="text" id="last-name" name="ras" value="<?php echo $a['jenis_hewan'];?>" required="required" class="form-control col-md-7 col-xs-12">
	                        </div>
	                      </div>
	                        </div>
	                        <div class="modal-footer">
	                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                          <button type="button" name="submit" class="btn btn-primary">Save changes</button>
	                        </div>
                      	</form>
                      </div>
                    </div>
                  </div>
<?php 
}else{
	echo "Data Salah";
}
?>