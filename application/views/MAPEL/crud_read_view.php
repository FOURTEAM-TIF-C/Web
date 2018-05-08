<!DOCTYPE html>
<html>
<head>
	<title>DEMO CRUD</title>
</head>
<body><center>
<h2>Demo Crud</h2>
<p><a href="mapel/create"> TAMBAH DATA</a></p>

<table border="1">
	<tr>
		<th >id_mapel</th>
		<th >nama_mapel</th>
		<th >kkm</th>
		<th  colspan="2">AKSI</th>
	</tr>
	<?php
foreach($rows as $row){
	?>
	<tr>
		<td><?php echo $row->id_mapel; ?></td>
		<td><?php echo $row->nama_mapel; ?></td>
		<td><?php echo $row->kkm; ?></td>

		<td align="center"><a href="mapel/update/<?php echo $row->id_mapel; ?>">Ubah</a>
		<a href="mapel/delete/<?php echo $row->id_mapel;  ?>">Hapus</a></td>
	</tr>
	<?php
}
?>
</table></center>
</body>
</html>