<!Doctype HTML>
<html>
<head>
<title>Bikin CV!!</title>
<link type="text/css" rel="stylesheet" href="style.css"  >
<Script language="javascript">
        function addRowWork(tableID) {
 
            var table = document.getElementById(tableID);
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
			
 
            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            element1.name="chk_work[]";
            cell1.appendChild(element1);
 
            var cell2 = row.insertCell(1);
            cell2.innerHTML = rowCount;
 
            var cell3 = row.insertCell(2);
            var element2 = document.createElement("input");
            element2.type = "text";
            element2.name = "txt_work_name[]";
            cell3.appendChild(element2);
			
			var cell4=row.insertCell(3);
			var element3 = document.createElement("input");
            element3.type = "text";
            element3.name = "txt_work_position[]";
            cell4.appendChild(element3);
			
			var cell5=row.insertCell(4);
			var element4=document.createElement("input");
			element4.type="text";
			element4.name="txt_work_period[]";
			cell5.appendChild(element4);
 
 
        }
 
        function deleteRowWork(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
 
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
 
 
            }
			
			for (var i=1; i<rowCount; i++){
				var row = table.rows[i];
				row.cells[1].innerHTML=i;
			}
			
            }catch(e) {
                alert(e);
            }
        }
		
		 function addRowEducation(tableID) {
 
            var table = document.getElementById(tableID);
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
			
 
            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            element1.name="chk_edu[]";
            cell1.appendChild(element1);
 
            var cell2 = row.insertCell(1);
            cell2.innerHTML = rowCount;
 
            var cell3 = row.insertCell(2);
            var element2 = document.createElement("input");
            element2.type = "text";
            element2.name = "txt_edu_name[]";
            cell3.appendChild(element2);
			
			var cell4=row.insertCell(3);
			var element3 = document.createElement("input");
            element3.type = "text";
            element3.name = "txt_edu_faculty[]";
            cell4.appendChild(element3);
			
			var cell5=row.insertCell(4);
			var element4=document.createElement("input");
			element4.type="text";
			element4.name="txt_edu_degree[]";
			cell5.appendChild(element4);
			
			var cell6=row.insertCell(5);
			var element5=document.createElement("input");
			element5.type="text";
			element5.name="txt_edu_period[]";
			cell6.appendChild(element5);
			 
        }
		
		 function deleteRowEducation(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
 
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
 
 
            }
			
			for (var i=1; i<rowCount; i++){
				var row = table.rows[i];
				row.cells[1].innerHTML=i;
			}
			
            }catch(e) {
                alert(e);
            }
        }
		
		  function addRowLang(tableID) {
 
            var table = document.getElementById(tableID);
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
			
 
            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            element1.name="chk_lang[]";
            cell1.appendChild(element1);
 
            var cell2 = row.insertCell(1);
            cell2.innerHTML = rowCount;
 
            var cell3 = row.insertCell(2);
            var element2 = document.createElement("input");
            element2.type = "text";
            element2.name = "txt_lang_name[]";
            cell3.appendChild(element2);
			
			var cell4=row.insertCell(3);
			var element3 = document.createElement("input");
            element3.type = "text";
            element3.name = "txt_lang_level[]";
            cell4.appendChild(element3);
 
        }
		
		 function deleteRowLang(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
 
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
 
 
            }
			
			for (var i=1; i<rowCount; i++){
				var row = table.rows[i];
				row.cells[1].innerHTML=i;
			}
			
			
            }catch(e) {
                alert(e);
            }
        }
		
		function addRowSkill(tableID) {
 
            var table = document.getElementById(tableID);
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
			
 
            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            element1.name="chk_skill[]";
            cell1.appendChild(element1);
 
            var cell2 = row.insertCell(1);
            cell2.innerHTML = rowCount;
 
            var cell3 = row.insertCell(2);
            var element2 = document.createElement("input");
            element2.type = "text";
            element2.name = "txt_skill_name[]";
            cell3.appendChild(element2);
			
			var cell4=row.insertCell(3);
			var element3 = document.createElement("input");
            element3.type = "text";
            element3.name = "txt_skill_details[]";
            cell4.appendChild(element3);
 
        }
		
		 function deleteRowSkill(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
 
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
 
 
            }
			
			for (var i=1; i<rowCount; i++){
				var row = table.rows[i];
				row.cells[1].innerHTML=i;
			}
			
            }catch(e) {
                alert(e);
            }
        }
 
    </script>
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
<body>

<?php
if ($_POST['rad']=='design1')
$f='Design1.php';
else
$f='Design2.php';

if (isset($_POST['submit']))
{
echo '<form action="'.$f.'" method="post" enctype="multipart/form-data">
<div class="nav"><p style="text-align: center;">CURRICULUM VITAE</p><div>
<fieldset>
<legend>DATA PRIBADI</legend>
<input type="file" name="fileToUpload" id="file"/>
<table>

<tr><td>Nama Lengkap:</td><td><input type="txt" name="nama" ></td></tr>
<tr><td>Tempat, Tanggal Lahir:</td><td><input type="txt" name="ttl"></td></tr>
<tr><td>Alamat:</td><td><input type="txt" name="alamat"></td></tr>
<tr><td>Kontak:</td><td><input type="txt" name="kontak"></td></tr>
<tr><td>E-mail:</td><td><input type="txt" name="email"></td></tr>

</table>
</fieldset>
<br>';
if ($_POST['chk_w']=='work')
{
echo '<fieldset>
<legend>PENGALAMAN KERJA</legend>
 <INPUT type="button" value="Tambah" onclick=addRowWork("dataTableWork") />
 <INPUT type="button" value="Hapus" onclick=deleteRowWork("dataTableWork") />
<table id="dataTableWork">
<tr>
<th></th>
<th>Nomor</th>
<th>Perusahaan / Organisasi</th>
<th>Pekerjaan</th>
<th>Periode</th>
</tr>
<tr>
<td><input type="checkbox" name="chk_work[]"/></TD>
<td>1</td>
<td> <input type="text" name="txt_work_name[]"/> </TD>
<td><input type="text" name="txt_work_position[]"/></td>
<td><input type="text" name="txt_work_period[]"/></td>
</tr>
</table>
</fieldset>
<br>';
}
if ($_POST['chk_e']=='edu')
{
echo '<fieldset>
<INPUT type="button" value="Tambah" onclick=addRowEducation("dataTableEducation") />
<INPUT type="button" value="Hapus" onclick=deleteRowEducation("dataTableEducation") />
<legend>DATA PENDIDIKAN</legend>
<table id="dataTableEducation">
<tr>
<th></th>
<th>Nomor</th>
<th>Universitas / Sekolah</th>
<th>Jurusan</th>
<th>Tingkat</th>
<th>Periode</th>
</tr>
<tr>
<td><input type="checkbox" name="chk_edu[]"/></td>
<td>1</td>
<td> <input type="text" name="txt_edu_name[]"/> </td>
<td><input type="text" name="txt_edu_faculty[]"/></td>
<td><input type="text" name="txt_edu_degree[]"/></td>
<td><input type="text" name="txt_edu_period[]"/></td>
</tr>
</table>
</fieldset><br>';
}
if ($_POST['chk_l']=='lang')
{
echo 
'<fieldset>
<legend>DATA KEMAMPUAN BAHASA</legend>
<INPUT type="button" value="Tambah" onclick=addRowLang("dataTableLanguage") />
<INPUT type="button" value="Hapus" onclick=deleteRowLang("dataTableLanguage") />
<table id="dataTableLanguage">
<tr>
<th></th>
<th>Nomor</th>
<th>Bahasa</th>
<th>Tingkat Kemahiran</th>
</tr>
<tr>
<td><input type="checkbox" name="chk_lang[]"/></TD>
<td>1</td>
<td> <input type="text" name="txt_lang_name[]"/> </td>
<td> <input type="text" name="txt_lang_level[]"/> </td>
</tr>
</table>
</fieldset>
<br>';
}
if ($_POST['chk_s']=='skill')
{
echo '<fieldset>
<legend>DATA KEMAMPUAN PENDUKUNG</legend>
<INPUT type="button" value="Tambah" onclick=addRowSkill("dataTableSkill") />
<INPUT type="button" value="Hapus" onclick=deleteRowSkill("dataTableSkill") />
<table id="dataTableSkill">
<tr>
<th></th>
<th>Nomor</th>
<th>Kemampuan</th>
<th>Rincian</th>
</tr>
<tr>
<td><input type="checkbox" name="chk_skill[]"/></TD>
<td>1</td>
<td> <input type="text" name="txt_skill_name[]"/> </td>
<td> <input type="text" name="txt_skill_details[]"/> </td>
</tr>
</table>
</fieldset>';
}echo '<br><p align = "center">
<input type="submit" value="Selesai" name="submit" style="width:200px; height:30px;"/>
</form><br>';
}
?>
</body>