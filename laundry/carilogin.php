<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>selamat datang di website sekolah kami</title>
<style type="text/css">
<!--
body {
	background-color: #333333;
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
.style2 {font-size: 36px; }
.style8 {color: #333333}
.style10 {
	color: #FFFFFF;
	font-family: "Courier New", Courier, monospace;
	font-size: 36px;
}
.style5 {font-family: "Bahnschrift SemiBold SemiConden"}
.style7 {font-family: "Bahnschrift SemiBold SemiConden"; font-weight: bold; }
-->
</style></head>

<body>
<table width="99%" height="161" border="0" cellpadding="0" cellspacing="10">
  <tr>
    <th width="33%" bgcolor="#0000CC" scope="col"><div align="center" class="style2"><a href="halaman_user.php" class="style8">Beranda</a></div></th>
    <th width="33%" bgcolor="#FFFF33" scope="col"><div align="center" class="style2"><a href="layanan.php">Layanan</a></div></th>
    <th width="34%" bordercolor="#FFFFFF" bgcolor="#00CC33" scope="col"><div align="center" class="style2">Pesanan saya</div></th>
  </tr>
</table>
<table width="1021" height="58" border="2" cellpadding="0" cellspacing="4">
  <tr bgcolor="#999999">
    <td width="254"><div align="center">
      <blockquote>
        <p><span class="style7">Username</span></p>
      </blockquote>
    </div></td>
    <td width="242"><div align="center"><span class="style7">Password</span></div></td>
    <td width="115">&nbsp;</td>
    <td width="94">&nbsp;</td>
  </tr>
  <?php
	  include"koneksi.php";
	  $cari=$_POST['txtcari'];
	  $tampil=mysql_query("select * from login where nama like '$cari%'");
	  while($baris=mysql_fetch_array($tampil))
	  {
	  ?>
  <tr>
    <td><?php echo"$baris[username]"; ?>&nbsp;</td>
    <td><?php echo"$baris[password]"; ?>&nbsp;</td>
    <td><div align="center"><span class="style5"> <?php echo"<a href=ubahlogin.php?username=$baris[username]>Edit</a>"; ?></span></div></td>
    <td><div align="center"><span class="style5"></span> <?php echo"<a href=hapuslogin.php?username=$baris[username]>Delete</a>"; ?></div></td>
  </tr>
  <?php } ?>
</table>
<blockquote>&nbsp;</blockquote>
<p align="left" class="style10">&nbsp;</p>
<blockquote>
  <blockquote>
    <form id="form1" name="form1" method="post" action="carilogin.php">
      <label></label>
      <blockquote>
        <blockquote>
          <div align="left"></div>
          <blockquote>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <blockquote>
              <blockquote>
                <p><span class="style10">SEARCH... </span>
                  <input type="text" name="textfield" id="textfield" />
                      </p>
                <blockquote>
                  <div align="left">
                    <label></label>
                  </div>
                </blockquote>
              </blockquote>
            </blockquote>
            <p>&nbsp;</p>
          </blockquote>
        </blockquote>
      </blockquote>
    </form>
  </blockquote>
</blockquote>
</body>
</html>