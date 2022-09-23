<?php
include"koneksi.php";
$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];

$admin=mysql_query("select * from login where username='$username' and password='$password'");

if(mysql_fetch_array($admin))
{
header("location:admin/halaman_user.php");
}
else
{
echo"<script> alert('MOHON PERIKSA KEMBALI USERNAME , PASSWORD DAN HAK AKSES ANDA !!!')</script>";
include"masukkanlogin.php";
}
?>