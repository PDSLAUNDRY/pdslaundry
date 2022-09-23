<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>selamat datang di website sekolah kami</title>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
	background-image: url(../bkimgs.jpg);
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #FF66FF;
}
a:active {
	text-decoration: none;
}
.style7 {font-family: "Bahnschrift SemiBold SemiConden"; font-weight: bold; }
.style2 {
	font-size: 36px;
	font-family: "Berlin Sans FB Demi";
	font-weight: bold;
}
-->
</style></head>

<body>
<div align="center">
  <p align="left" class="style2"><a href="admin/halaman_admin.php">&lt;= BACK</a></p>
  <table width="736" height="61" border="2" cellpadding="0" cellspacing="4">
    <tr bgcolor="#999999">
      <td width="265"><div align="center"><span class="style7">Username</span></div></td>
      <td width="237"><div align="center"><span class="style7">Password</span></div></td>
      <td width="110">&nbsp;</td>
      
    </tr>
    <?php
	  include"koneksi.php";
	  $tampil=mysql_query("select * from login");
	  while($baris=mysql_fetch_array($tampil))
	  {
	  ?>
    <tr>
      <td><?php echo"$baris[username]"; ?>&nbsp;</td>
      <td><?php echo"$baris[password]"; ?>&nbsp;</td>
     
      <td><div align="center"><?php echo"<a href=hapuslogin.php?username=$baris[username]>Delete</a>"; ?></div></td>
    </tr>
    <?php } ?>
  </table>
</div>
<p align="center">&nbsp;</p>
</body>
</html>
