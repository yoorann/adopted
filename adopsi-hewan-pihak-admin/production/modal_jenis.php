<?php 
include "../configDB.php";
$id = $_GET['id_jenis'];
$jenis = mysql_query("SELECT * FROM hewan_jenis WHERE id_jenis = '$id'") or die(mysql_error());
$a = mysql_fetch_array($jenis);
?>
<div class="modal-dialog">
    <div class="modal-content">
			<form method="POST" action="action/update_jenis_hewan.php" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
				<input type="hidden" name="id" value="<?php echo $a['id_jenis'];?>">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
			    </button>
			    <h2>Jenis Hewan</h2>
			  </div>
			<div class="modal-body">

			<div class="form-group">
			  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis : </label>
			  <div class="col-md-6 col-sm-6 col-xs-12">
			    <input type="text" name="jenis" id="first-name" value="<?php echo $a['jenis'];?>" required="required" class="form-control col-md-7 col-xs-12">
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ras : </label>
			  <div class="col-md-6 col-sm-6 col-xs-12">
			    <input type="text" id="last-name" name="ras" value="<?php echo $a['ras'];?>" required="required" class="form-control col-md-7 col-xs-12">
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Artikel : </label>
			  <div class="col-md-6 col-sm-6 col-xs-12">
			  	<textarea id="message" required="required" class="form-control" name="artikel" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                              data-parsley-validation-threshold="10"><?php echo $a['artikel'];?></textarea>
			  </div>
			</div><div class="form-group">
			  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cara Rawat : </label>
			  <div class="col-md-6 col-sm-6 col-xs-12">
			  	<textarea id="message" required="required" class="form-control" name="rawat" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                              data-parsley-validation-threshold="10"><?php echo $a['rawat'];?></textarea>
			  </div>
			</div>
			  </div>
			  <div class="modal-footer">
			    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
			    <input type="submit" name="submit" class="btn btn-primary" value="Perbarui Data">
			  </div>
			</form>
	</div>
</div>