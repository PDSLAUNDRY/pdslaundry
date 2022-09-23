<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>selamat datang di website sekolah kami</title>
<style type="text/css">
<!--
body {

	background-color:#999999;
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
	color:#FFFFFF;
}
a:active {
	text-decoration: none;
}
.style7 {font-family: "Bahnschrift SemiBold SemiConden"; font-weight: bold; }
.style8 {font-size: 24px}

-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="simpanprofil.php">
  <p align="center"><strong><span class="style8">SILAHKAN CARI DATA ANDA</span></strong></p>
  <table width="737" height="61" border="2" align="center" cellpadding="0" cellspacing="4">
    <tr bgcolor="#999999">
      <td width="62"><div align="center"><span class="style7">Nis</span></div></td>
      <td width="112"><div align="center"><span class="style7">Nama</span></div></td>
      <td width="126"><div align="center"><span class="style7">Alamat</span></div></td>
      <td width="117"><div align="center"><span class="style7">Jenis Kelamin</span></div></td>
      <td width="109"><div align="center"><span class="style7">Kelas</span></div></td>
      <td width="96"><div align="center"><?php echo"<a href=hapussiswa.php?nis=$baris[nama]>Delete</a>"; ?></div></td>
      <td width="83"><table width="136" border="1" cellspacing="10" cellpadding="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <?php
	  include"koneksi.php";
	  $tampil=mysql_query("select * from profil");
	  while($baris=mysql_fetch_array($tampil))
	  {
	  ?>
    <tr>
      <td><?php echo"$baris[nama]"; ?>&nbsp;</td>
      <td><?php echo"$baris[alamat]"; ?>&nbsp;</td>
      <td><?php echo"$baris[nohp]"; ?>&nbsp;</td>
      <td><?php echo"$baris[jeniskelamin]"; ?>&nbsp;</td>
      <td><div align="center"><span class="style5"> <?php echo"<a href=ubahprofil.php?nis=$baris[nama]>Edit</a>"; ?></span></div></td>
      <td><div align="center"><span class="style5"></span></div></td>
    </tr>
    <?php } ?>
  </table>
  <div align="center"></div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
