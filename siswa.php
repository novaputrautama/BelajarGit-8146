<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$siswa = new Siswa();
$data = $siswa->readAllSiswa();

?>

<table border="1">
	<tr>
		<th>NO</th>
		<th>ID SISWA</th>
		<th>FULL NAME</th>
		<th>TGL LAHIR</th>
		<th>KEWARGANEGARAAN</th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
	<?php $no=0?>
	<?php foreach($data as $a):?>
	<tr>
		<td><?php echo $no?></td>
		<td><?php echo $a['id_siswa']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['date_ob']?></td>
		<td><?php echo $a['nationality']?></td>
		<td><a href="dsiswa.php?id=<?php echo $a['id_siswa']?>">Detail</a></td>
		<td><a href="usiswa.php?id=<?php echo $a['id_siswa']?>">Edit</a></td>
		<td><a href="delsiswa.php?id=<?php echo $a['id_siswa']?>">Delete</a></td>
		<?php $no++?>
	</tr>
	<?php endforeach?>
</table>