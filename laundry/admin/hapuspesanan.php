<?php
include"koneksi.php";
$nohp=$_GET['nohp'];
$hapus=mysql_query("delete from inputpesanan where nohp='$nohp'");
include"tampilpesanan.php";
?>