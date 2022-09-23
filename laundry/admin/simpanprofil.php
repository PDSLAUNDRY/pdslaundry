<?php
include"koneksi.php";
$nama=$_POST['txtnama'];
$alamat=$_POST['txtalamat'];
$nohp=$_POST['txtnohp'];
$jeniskelamin=$_POST['txtjk'];
$simpan=mysql_query("insert into profil values('$nama','$alamat','$nohp','$jeniskelamin')");
include"PROFILUSER.PHP";
?>