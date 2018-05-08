<!DOCTYPE html>
<html>
<head>
	<title>DEMO CRUD</title>
</head>
<body><center>
<h2>Demo Crud</h2>
<p><a href="guru/create"> TAMBAH DATA</a></p>

<table border="1">
	<tr>
		<th width="100">nip</th>
		<th width="100">nama_guru</th>
		<th width="100" colspan="2">AKSI</th>
	</tr>
	<?php
foreach($rows as $row){
	?>
	<tr>
		<td><?php echo $row->nip; ?></td>
		<td><?php echo $row->nama_guru; ?></td>
		
		<td align="center"><a href="guru/update/<?php echo $row->nip; ?>">Ubah</a>
		<a href="guru/delete/<?php echo $row->nip;  ?>">Hapus</a></td>
	</tr>
	<?php
}
?>
</table></center>
</body>
</html>