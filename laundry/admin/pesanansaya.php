<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {font-size: 36px; }
.style8 {color: #333333}
.style9 {
	font-size: 18px;
	font-family: "Berlin Sans FB Demi";
	font-weight: bold;
}
body {
	background-color: #999999;
}
-->
</style>
</head>

<body>
<table width="99%" height="102" border="0" cellpadding="0" cellspacing="10">
  <tr>
    <th width="33%" height="82" bgcolor="#0000CC" scope="col"><div align="center" class="style2"><a href="halaman_user.php" class="style8">Beranda</a></div></th>
    <th width="33%" bgcolor="#FFFF33" scope="col"><div align="center" class="style2"><a href="layanan.php">Layanan</a></div></th>
    <th width="34%" bordercolor="#FFFFFF" bgcolor="#00CC33" scope="col"><div align="center" class="style2">Pesanan saya</div></th>
  </tr>
</table>
<p align="center">&nbsp;</p>
<div align="center">
  <form id="form1" name="form1" method="post" action="simpanpesanan.php">
    <table width="588" border="0" cellpadding="0" cellspacing="8" bgcolor="#CCCCCC">
      <tr>
        <td colspan="2"><div align="center" class="style9">ISI BIODATA DI BAWAH INI UNTUK MELANJUTKAN PEMESANAN</div></td>
      </tr>
      <tr>
        <td width="32">&nbsp;</td>
        <td width="532"><div align="center">
            <blockquote>&nbsp; </blockquote>
        </div>
            <blockquote>
              <p align="center">Nama</p>
            </blockquote></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <div align="center">
            <input type="text" name="txtnama" id="txtnama" />
            </div>
          </label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">
            <blockquote>&nbsp; </blockquote>
        </div>
            <blockquote>
              <p align="center">Alamat</p>
            </blockquote></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <div align="center">
            <input type="text" name="txtalamat" id="txtalamat" />
            </div>
          </label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">
            <blockquote>&nbsp; </blockquote>
        </div>
            <blockquote>
              <p align="center"> No HP</p>
            </blockquote></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <div align="center">
            <input type="text" name="txtnohp" id="txtnohp" />
            </div>
          </label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">
            <blockquote>&nbsp; </blockquote>
        </div>
            <blockquote>
              <p align="center">Jenis Pencucian</p>
            </blockquote></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <div align="center">
            <select name="txtjenis" id="txtjenis">
                <option>CUCI BASAH</option>
                <option>CUCI KERING</option>
                <option>SPESIAL</option>
              </select>
            </div>
          </label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">
            <blockquote>&nbsp; </blockquote>
        </div>
            <blockquote>
              <p align="center">Total Berat</p>
            </blockquote></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <div align="center">
            <input type="text" name="txttotal" id="txttotal" />
            </div>
          </label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <div align="right">
            <input type="submit" name="button" id="button" value="simpan" />
            <input type="submit" name="button2" id="button2" value="batal" />
            </div>
          </label></td>
      </tr>
    </table>
  </form>
</div>
<div align="center"></div>
<p>&nbsp;</p>
</body>
</html>
