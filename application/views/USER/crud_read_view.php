<!DOCTYPE html>
<html>
<head>
	<title>DEMO CRUD</title>
</head>
<body><center>
<h2>Demo Crud</h2>
<p><a href="user/create"> TAMBAH DATA</a></p>

<table border="1">
	<tr>
		<th >id_user</th>
		<th >nama_lengkap</th>
		<th >username</th>
		<th >password</th>
		<th>level</th>
		<th  colspan="2">AKSI</th>
	</tr>
	<?php
foreach($rows as $row){
	?>
	<tr>
		<td><?php echo $row->id_user; ?></td>
		<td><?php echo $row->nama_lengkap; ?></td>
		<td><?php echo $row->username; ?></td>
		<td><?php echo $row->password; ?></td>
		<td><?php echo $row->level; ?></td>
		<td align="center"><a href="user/update/<?php echo $row->id_user; ?>">Ubah</a>
		<a href="user/delete/<?php echo $row->id_user;  ?>">Hapus</a></td>
	</tr>
	<?php
}
?>
</table></center>
</body>
</html>