<?php
$hah= mysql_query("SELECT * FROM hewan_jenis GROUP BY jenis");
$nah= mysql_query("SELECT jenis_hewan FROM adopsi GROUP BY jenis_hewan");
$yay= mysql_query("SELECT COUNT(*) as jumlah FROM adopsi GROUP BY jenis_hewan");
$jan= mysql_query("SELECT COUNT(*) as jumlah, jenis_hewan FROM adopsi WHERE MONTH(tanggal)=1");
$feb= mysql_query("SELECT COUNT(*) as jumlah, jenis_hewan FROM adopsi WHERE MONTH(tanggal)=2");
$mar= mysql_query("SELECT COUNT(*) as jumlah, jenis_hewan FROM adopsi WHERE MONTH(tanggal)=3");
$apr= mysql_query("SELECT COUNT(*) as jumlah, jenis_hewan FROM adopsi WHERE MONTH(tanggal)=4");
$may= mysql_query("SELECT COUNT(*) as jumlah, jenis_hewan FROM adopsi WHERE MONTH(tanggal)=5");
$jun= mysql_query("SELECT COUNT(*) as jumlah, jenis_hewan FROM adopsi WHERE MONTH(tanggal)=6");
$jul= mysql_query("SELECT COUNT(*) as jumlah, jenis_hewan FROM adopsi WHERE MONTH(tanggal)=7");
$aug= mysql_query("SELECT COUNT(*) as jumlah, jenis_hewan FROM adopsi WHERE MONTH(tanggal)=8");
$sep= mysql_query("SELECT COUNT(*) as jumlah, jenis_hewan FROM adopsi WHERE MONTH(tanggal)=9");
$oct= mysql_query("SELECT COUNT(*) as jumlah, jenis_hewan FROM adopsi WHERE MONTH(tanggal)=10");
$nov= mysql_query("SELECT COUNT(*) as jumlah, jenis_hewan FROM adopsi WHERE MONTH(tanggal)=11");
$dec= mysql_query("SELECT COUNT(*) as jumlah, jenis_hewan FROM adopsi WHERE MONTH(tanggal)=12");
$recent= mysql_query("SELECT * FROM adopsi ORDER BY tanggal DESC LIMIT 0,3");
$adoptions= mysql_query("SELECT COUNT(*) as jumlah_adopsi FROM adopsi");
$pets= mysql_query("SELECT COUNT(*) as jumlah_hewan FROM hewan");

$a = mysql_fetch_array($pets);
$b = mysql_fetch_array($adoptions);

/*echo $a['jumlah_hewan']." ". $b['jumlah_adopsi'];*/
?>
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Dashboard</h3>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<?php
		include "../configDB.php";
		include "variabel.php";
		include "at-a-glance.php";
		echo "<br>";
		include "user-recent-act.php";
		include "hewan-tahunini.php";
		echo "<br>";
		include "hewan-hewan.php";
		?>

	</div>

</div>
