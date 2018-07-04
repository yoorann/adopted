<?php 
include "../configDB.php";
$id = $_GET['id_hewan'];
$jenis = mysql_query("SELECT * FROM hewan WHERE id_hewan = '$id'") or die(mysql_error());
$a = mysql_fetch_array($jenis);
?>
<div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="action/update-hewan.php" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
      	<input type="hidden" name="id_hewan" value="<?php echo $a['id_hewan'];?>">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
          <h2>Hewan</h2>
        </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="Image" class="control-label col-md-3 col-sm-3 col-xs-12">Foto : </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          	<img src="images/pet/<?php echo $a['image']; ?>" alt="" width="200" height="200">
            <input type="file" name="image" class="col-md-7 col-sm-7 col-xs-7"> 
            <br>
            <input type="checkbox" name="ganti"> &nbsp; Ganti Foto
            <p>jpg/png</p>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis : </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control hewan" name="jenis" >
              <option value="<?php echo $a['jenis_hewan'];?>"><?php echo $a['jenis_hewan'];?></option>
              <option></option>
              <?php 
                $jenis = mysql_query("SELECT jenis FROM jenis_hewan GROUP BY jenis");
                while ($b = mysql_fetch_array($jenis)) {
              ?>
              <option value="<?php echo $b['jenis'];?>"><?php echo $b['jenis'];?></option>
              <?php
                }
               ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ras : </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control" name="ras_hewan" id="ras">
            	<option value="<?php echo $a['ras'];?>"><?php echo $a['ras'];?></option>
              <option></option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Umur : </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="radio" name="umur" value="bayi" <?php echo($a['umur'] == 'bayi')?'checked' : ''?> > &nbsp; Bayi &nbsp;
            <input type="radio" name="umur" value="dewasa" <?php echo($a['umur'] == 'dewasa')?'checked' : ''?> > &nbsp; Dewasa &nbsp;
          </div>
        </div>
        <div class="form-group">
          <label for="Image" class="control-label col-md-3 col-sm-3 col-xs-12">Kelamin : </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div id="gender" class="btn-group" data-toggle="buttons">
              <label class="btn btn-default" name="kelamin" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="kelamin" value="jantan" <?php echo ($a['kelamin']=='jantan')?'checked':'';?>> &nbsp; Jantan &nbsp;
              </label>
              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="kelamin" value="betina" <?php echo ($a['kelamin']=='betina')?'checked':'';?>> &nbsp; Betina &nbsp;
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="Image" class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi : </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea id="message" class="form-control" name="deskripsi" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-validation-threshold="10"><?php echo $a['deskripsi'];?></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="Image" class="control-label col-md-3 col-sm-3 col-xs-12">Donasi : </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="harga" class="col-md-7 col-sm-7 col-xs-7" value="<?php echo $a['harga'];?>">
          </div>
        </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" name="submit" class="btn btn-success" value="Update">
        </div>
      </form>
    </div>
  </div>