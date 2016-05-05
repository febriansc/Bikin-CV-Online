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

<?php
require_once 'PHPWord.php';
echo'<div class="nav">';
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       
        $uploadOk = 1;
    } else {
        echo '<p align="center">File is not an image.</p>';
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo '<p align="center">Sorry, your file is too large.</p><br>';
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif"&& $imageFileType != "JPG"&& $imageFileType != "JPEG" && $imageFileType != "PNG"
&& $imageFileType != "GIF" ) {
    echo '<p align="center">Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p><br>';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo '<p align="center">Sorry, your file was not uploaded.</p><br>';
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       $p=true;
    } else {
        echo '<p align="center">Sorry, there was an error uploading your file.<p align="center">';
    }
}

$nama=$_POST['nama'];
$ttl=$_POST['ttl'];
$alamat=$_POST['alamat'];
$kontak=$_POST['kontak'];
$email=$_POST['email'];

$eduname=$_POST['txt_edu_name'];
$edufac=$_POST['txt_edu_faculty'];
$edudeg=$_POST['txt_edu_degree'];
$eduper=$_POST['txt_edu_period'];

$langname=$_POST['txt_lang_name'];
$langlev=$_POST['txt_lang_level'];

$skill=$_POST['txt_skill_name'];
$skidet=$_POST['txt_skill_details'];

$workname=$_POST['txt_work_name'];
$workpos=$_POST['txt_work_position'];
$workper=$_POST['txt_work_period'];

// New Word Document
$PHPWord = new PHPWord();

// New portrait section
$section = $PHPWord->createSection();
// Define table style arrays

$styleTable = array('cellMargin'=>80);
$styleFirstRow = array('bgColor'=>'66BBFF');

$styleCell = array('valign'=>'center');


// Define font style for first row
$fontStyle = array('align'=>'center');
$fontStyle1 = array('bold'=>true,'align'=>'center', 'color'=>'006699');
$fontStyle2 = array('bold'=>true, 'italic'=>true, 'align'=>'center');

// Add table style
$PHPWord->addTableStyle('myOwnTableStyle', $styleTable,$styleFirstRow);

// Add table

$PHPWord->addFontStyle('rStyle', array('bold'=>true, 'size'=>16));
$PHPWord->addFontStyle('sStyle', array( 'size'=>16));
$PHPWord->addParagraphStyle('hStyle', array('align'=>'center', 'spaceAfter'=>100));
$PHPWord->addParagraphStyle('lStyle', array('align'=>'left', 'spaceAfter'=>100));
$section->addText('CURRICULUM VITAE', 'rStyle', 'hStyle');
$section->addTextBreak(1);

$section->addImage($target_file, array('width'=>200, 'height'=>230, 'align'=>'center'));
$PHPWord->addParagraphStyle('pStyle', array('align'=>'left', 'spaceAfter'=>20));
$table = $section->addTable('myOwnTableStyle');
$table->addRow();
$table->addCell(3000,$styleCell)->addText('DATA PRIBADI','sStyle','pStyle');
//$section->addText('Personal Information','sStyle','pStyle');
$section->addText('__________________________________________________','rStyle','lStyle');
// Add row
$PHPWord->addTableStyle('myOwnTableStyle1', $styleTable);
$table = $section->addTable('myOwnTableStyle1');



// Add cells
if ($nama!='')
{
$table->addRow(2);
$table->addCell(4000,$styleCell)->addText('Nama Lengkap',$fontStyle1);
$table->addCell(4000,$styleCell)->addText($nama,$fontStyle);
}
if ($ttl!='')
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Tempat, Tanggal Lahir', $fontStyle1);
$table->addCell(4000,$styleCell)->addText($ttl,$fontStyle);
}
if ($alamat!='')
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Alamat',$fontStyle1);
$table->addCell(4000,$styleCell)->addText($alamat,$fontStyle);
}
if ($kontak!='')
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Kontak',$fontStyle1);
$table->addCell(4000,$styleCell)->addText($kontak,$fontStyle);
}
if ($email!='')
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText('E-mail',$fontStyle1);
$table->addCell(4000,$styleCell)->addText($email,$fontStyle);
}

if ($workname!='')
{
$section->addTextBreak(2);
$table = $section->addTable('myOwnTableStyle');
$table->addRow();
$table->addCell(4000,$styleCell)->addText('PENGALAMAN KERJA','sStyle','pStyle');

//$section->addText('Work Experience','sStyle','pStyle');
$section->addText('__________________________________________________','rStyle','lStyle');
$table = $section->addTable('myOwnTableStyle1');
$table->addRow(3);
$table->addCell(4000,$styleCell)->addText('Periode', $fontStyle1);
$table->addCell(4000, $styleCell)->addText('Perusahaan / Organisasi',$fontStyle1);
$table->addCell(4000, $styleCell)->addText('Pekerjaan', $fontStyle1);
foreach ($workname as $a => $b)
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText($workper[$a], $fontStyle2);
$table->addCell(4000, $styleCell)->addText($workname[$a],$fontStyle);
$table->addCell(4000, $styleCell)->addText($workpos[$a], $fontStyle);
}
}
if ($eduname!='')
{
$section->addTextBreak(2);
$table = $section->addTable('myOwnTableStyle');
$table->addRow();
$table->addCell(4000,$styleCell)->addText('DATA PENDIDIKAN','sStyle','pStyle');
//$section->addText('Education','sStyle','pStyle');
$section->addText('__________________________________________________','rStyle','lStyle');
$table = $section->addTable('myOwnTableStyle1');
$table->addRow(4);
$table->addCell(4000,$styleCell)->addText('Periode', $fontStyle1);
$table->addCell(4000, $styleCell)->addText('Instansi',$fontStyle1);
$table->addCell(4000, $styleCell)->addText('Jurusan', $fontStyle1);
$table->addCell(4000, $styleCell)->addText('Tingkat', $fontStyle1);
foreach($eduname as $a => $b)
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText($eduper[$a], $fontStyle2);
$table->addCell(4000, $styleCell)->addText($eduname[$a],$fontStyle);
$table->addCell(4000, $styleCell)->addText($edufac[$a], $fontStyle);
$table->addCell(4000, $styleCell)->addText($edudeg[$a], $fontStyle);
}
}
if ($langname!='')
{
$section->addTextBreak(2);
$table = $section->addTable('myOwnTableStyle');
$table->addRow();
$table->addCell(5000,$styleCell)->addText('DATA KEMAMPUAN BAHASA','sStyle','pStyle');
//$section->addText('Languages','sStyle','pStyle');
$section->addText('__________________________________________________','rStyle','lStyle');
$table = $section->addTable('myOwnTableStyle1');
$table->addRow(2);
$table->addCell(4000,$styleCell)->addText('Bahasa', $fontStyle1);
$table->addCell(4000, $styleCell)->addText('Tingkat Kemahiran',$fontStyle1);
foreach ($langname as $a => $b)
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText($langname[$a], $fontStyle);
$table->addCell(4000, $styleCell)->addText($langlev[$a],$fontStyle);
}
}
if ($skill!='')
{
$section->addTextBreak(2);
$table = $section->addTable('myOwnTableStyle');
$table->addRow();
$table->addCell(6000,$styleCell)->addText('DATA KEMAMPUAN PENDUKUNG','sStyle','pStyle');
//$section->addText('Skills','sStyle','pStyle');
$section->addText('__________________________________________________','rStyle','lStyle');
$table = $section->addTable('myOwnTableStyle1');
$table->addRow(2);
$table->addCell(4000,$styleCell)->addText('Kemampuan', $fontStyle1);
$table->addCell(4000, $styleCell)->addText('Rincian',$fontStyle1);
foreach($skill as $a => $b)
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText($skill[$a], $fontStyle);
$table->addCell(4000, $styleCell)->addText($skidet[$a],$fontStyle);
}
}

$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
$objWriter->save('CV[bikincv.azurewebsites.net].docx');
echo '<ul><p align="center"><a href="CV[bikincv.azurewebsites.net].docx">Download CV Anda</a></p></ul>';
echo '</div>'
?>

</body>