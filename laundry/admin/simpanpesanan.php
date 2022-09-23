<?php
include"koneksi.php";
$nama=$_POST['txtnama'];
$alamat=$_POST['txtalamat'];
$nohp=$_POST['txtnohp'];
$jenispencucian=$_POST['txtjenis'];
$totalberat=$_POST['txttotal'];
$simpan=mysql_query("insert into inputpesanan values('$nama','$alamat','$nohp','$jenispencucian','$totalberat')");
include"pesanansaya.php";
?>