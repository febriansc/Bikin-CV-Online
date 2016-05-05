<!Doctype HTML>
<html>
<head>
<title>Bikin CV!!</title>
<link type="text/css" rel="stylesheet" href="style.css"  >
</head>

<body>
  
  <header>
    <div class="nav">
      <ul>
        <li ><a href="Index.php">Home</a></li>
        <li ><a class="active" href="PilihanForm.php">Bikin CV</a></li>
        <li ><a href="http://www.anjrr.id/about/">Tentang</a></li>
      </ul>
    </div>
  </header>

<div class="nav">

<table align=center>
<tr><td colspan=2><p>
Pilih Data Pribadi anda yang ingin ditambahkan kedalam Form CV anda.
</p></td>

<form name="frm_chk" action="/Form.php" method="post">
<tr><td colspan=2><input type="checkbox" name="chk_w" value="work">Pengalaman Kerja</td></tr>


<tr><td colspan=2><input type="checkbox" name="chk_e" value="edu">Data Pendidikan</td></tr>


<tr><td colspan=2><input type="checkbox" name="chk_l" value="lang">Data Kemampuan Bahasa</td></tr>


<tr><td colspan=2><input type="checkbox" name="chk_s" value="skill">Data Kemampuan Pendukung / Teknis</td></tr>

<tr><td colspan=2 align=center><p>Pilih Desain</p></td></tr>

<tr>
<td align=center><input type="radio" name="rad" value="design1"></td>
<td align=center><input type="radio" name="rad" value="design2"></td>
</tr>

<tr>
<td align=center><img src=images/desain1.PNG width=230 height=300></td>
<td align=center><img src=images/desain2.PNG width=230 height=300></td>
</tr>
<br>

<tr><td colspan=2 align=center><input type="submit" name="submit" value="Lanjut" style="width:100px; height:25px;"></td></tr>
</form>
</tr>
</table>
</div>
