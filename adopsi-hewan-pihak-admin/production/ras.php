<?php
include '../configDB.php';
$jenis = $_POST['jenis'];
$query = mysql_query("SELECT * FROM hewan_jenis WHERE jenis = '$jenis'");
while ($m = mysql_fetch_array($query)) { ?>
	<option id="ras" value="<?php echo $m["ras"]; ?>"><?php echo $m["ras"] ?></option>
<?php } ?>
