<html>
	<head>
		<title>List Mahasiswa</title>
	</head>
	<body>
		<p><h3 align="center">Daftar Mahasiswa</h3></p>
		<p align="center"><a href="<?php echo base_url()?>Siswa/input">Tambah</a></p>
		<p align="center">
 DATA SISWA<br/>
    <a href="<?php echo base_url()?>Siswa1/home">Kelas 1</a>
    <a href="<?php echo base_url()?>Siswa2/home">Kelas 2</a>
    <a href="">Kelas 3</a>
    <a href="">Kelas 4</a>
    <a href="">Kelas 5</a>
    <a href="">Kelas 6</a>
</p>
		<p align="center">
			<table border="1">
				<tr>
					<th>No</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>Kelas</th>
					
					<th colspan="2"></th>
				</tr>
				<?php
                $no = 1;
                foreach ($data as $row): ?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row->nis;?></td>
					<td><?php echo $row->nama_siswa;?></td>
					<td><?php echo $row->kelas;?></td>
					<td><a href="<?php echo base_url(); ?>Siswa/edit/<?php echo $row->nis;?>">Edit</a></td>
					<td><a href="<?php echo base_url(); ?>Siswa/delete/<?php echo $row->nis;?>">Hapus</a></td>
				</tr>
				<?php $no++;
                endforeach;?>
			</table>
		</p>
	</body>
</html>