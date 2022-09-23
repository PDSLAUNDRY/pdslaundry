<?php
include"koneksi.php";
$nama=$_POST['txtnama'];
$alamat=$_POST['txtalamat'];
$nohp=$_POST['txtnohp'];
$jeniskelamin=$_POST['txtjk'];
$kelas=$_POST['txtkelas'];
$ubah=mysql_query("update login set nama='$nama',alamat='$alamat',nohp='$nohp',jk='$jk'where nohp='$nohp'");
include"PROFILUSER.PHP";

?>