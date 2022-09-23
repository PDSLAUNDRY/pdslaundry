<?php
include"koneksi.php";
$username=$_POST['txtusername'];
$password=$_POST['txtpassword'];
$simpan=mysql_query("insert into login values('$username','$password')");
include"inputlogin.php";
?>