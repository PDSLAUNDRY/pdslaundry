<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>selamat datang di website sekolah kami</title>
<style type="text/css">
<!--
body {
	background-color: #999999;
	background-image: url(../bkimgs.jpg);
}
.style5 {font-family: "Bahnschrift SemiBold SemiConden"}
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
.style9 {
	font-family: "Courier New", Courier, monospace;
	font-size: 18px;
	font-weight: bold;
	font-style: italic;
}
.style2 {font-size: 36px; }
.style8 {	font-size: 36px;
	color: #000000;
	font-weight: bold;
}
-->
</style></head>

<body>
<table width="99%" height="102" border="0" cellpadding="0" cellspacing="10">
  <tr>
    <th width="33%" height="82" bgcolor="#0000CC" scope="col"><div align="center" class="style8"><a href="halaman_admin.php">Beranda</a></div></th>
    <th width="33%" bgcolor="#FFFF33" scope="col"><div align="center" class="style2"><a href="layanan.php">Layanan</a></div></th>
    <th width="34%" bordercolor="#FFFFFF" bgcolor="#00CC33" scope="col"><div align="center" class="style2">Pesanan saya</div></th>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="737" height="61" border="2" align="center" cellpadding="0" cellspacing="4">
  <tr bgcolor="#999999">
    <td width="62"><div align="center"><strong><span class="style5">Nama</span></strong></div></td>
    <td width="112"><div align="center"><strong>Alamat</strong></div></td>
    <td width="126"><div align="center"><strong>No hp</strong></div></td>
    <td width="117"><div align="center"><strong><span class="style5">Jenis Pencucian</span></strong></div></td>
    <td width="109"><div align="center"><strong>Total Berat</strong></div></td>
    <td width="96">&nbsp;</td>
    <td width="83">&nbsp;</td>
  </tr>
  <?php
	  include"koneksi.php";
	  $tampil=mysql_query("select * from inputpesanan");
	  while($baris=mysql_fetch_array($tampil))
	  {
	  ?>
  <tr>
    <td><div align="center"><?php echo"$baris[nama]"; ?>&nbsp;</div></td>
    <td><div align="center"><?php echo"$baris[alamat]"; ?>&nbsp;</div></td>
    <td><div align="center"><?php echo"$baris[nohp]"; ?>&nbsp;</div></td>
    <td><div align="center"><?php echo"$baris[jenispencucian]"; ?>&nbsp;</div></td>
    <td><div align="center"><?php echo"$baris[totalberat]"; ?>&nbsp;</div></td>
    <td><div align="center"><span class="style5"></span> <?php echo"<a href=hapuspesanan.php?nohp=$baris[nohp]>Delete</a>"; ?></div></td>
  </tr>
  <?php } ?>
</table>
<p>&nbsp;</p>
</body>
</html>