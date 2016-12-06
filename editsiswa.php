<?php 
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

if (!isset($_POST['kirim'])) {
	exit('Access Forbiden');
}

$siswa = new Siswa();
if(!copy($_FILES['in_foto']['tmp_name'],'lib/img/'.$_POST['in_nis'].'.png')){
	exit('eror upload file');
}

$data['input_name'] = addslashes($_POST['in_name']);
$data['input_email'] = $_POST['in_email'];
$data['input_nationality'] = $_POST['in_nation'];
$data['foto']='lib/img/'.$_POST['in_nis'].'.png';
//$siswa->update Siswa($_POST['in_nis'], $data);

$siswa->updateSiswa($_POST['in_nis'],$data);

echo "data siswa berhasil di update<br />";
echo "<a href='usiswa.php?a=".$_POST['in_nis']."'>Detail Siswa</a>"
 ?>