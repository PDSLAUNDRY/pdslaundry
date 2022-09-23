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
.style3 {
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style4 {font-family: "Arial Black"; }
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
.style2 {font-size: 36px; }
.style8 {font-size: 36px;
	color: #000000;
	font-weight: bold;
}

-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="updateprofil.php">
  <p>&nbsp;</p>
  <table width="99%" height="102" border="0" cellpadding="0" cellspacing="10">
    <tr>
      <th width="33%" height="82" bgcolor="#0000CC" scope="col"><div align="center" class="style8"><a href="halaman_admin.php">Beranda</a></div></th>
      <th width="33%" bgcolor="#FFFF33" scope="col"><div align="center" class="style2"><a href="layanan.php">Layanan</a></div></th>
      <th width="34%" bordercolor="#FFFFFF" bgcolor="#00CC33" scope="col"><div align="center" class="style2">Pesanan saya</div></th>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="8">
    <tr>
      <td width="32">&nbsp;</td>
      <td width="344"><div align="center"><a href="../../sekolah/admin/index.php">Input Data Siswa</a></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><blockquote>
          <p>Nama</p>
      </blockquote></td>
    </tr>
    <?php
			include"koneksi.php";
			$nis=$_GET['nis'];
			$tampil=mysql_query("select * from siswa where nis='$nis'");
			while($baris=mysql_fetch_array($tampil))
			{
			?>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="txtnama" type="text" id="txtnama" value="<?php echo"$baris[nama]";?>" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><blockquote>
          <p>Alamat</p>
      </blockquote></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="txtalamat" type="text" id="txtalamat" value="<?php echo"$baris[alamat]";?>" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><blockquote>
          <p>no hp</p>
      </blockquote></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="txtnohp" type="text" id="txtnohp" value="<?php echo"$baris[nohp]";?>" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><blockquote>
          <p>Jenis Kelamin</p>
      </blockquote></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <select name="txtjk" id="txtjk">
          <option>laki-laki</option>
          <option selected="selected">perempuan</option>
          <option>tidak ingin memberitahu</option>
        </select>
      </label></td>
    </tr>

    <?php } ?>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button"id="button" value="simpan" />
      </label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
