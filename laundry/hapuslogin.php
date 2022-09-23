<?php
include"koneksi.php";
$username=$_GET['username'];
$hapus=mysql_query("delete from login where username='$username'");
include"tampillogin.php";
?>