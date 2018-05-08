<html>
	<head>
		<title>Input Mahasiswa</title>
	</head>
	<body>
		<h4 align="center">Tambah Data Mahasiswa</h4>
		<div align="center">
		<p>
			<form method="post" action="input">
        NIS<br/><input type="text" name="nis" size="10" maxlength="10" value="<?php if(isset($data)) { echo $data[0]->nis; } ?>"><br/><br/>
		
        Nama<br/><input type="text" name="nama_siswa" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->nama_siswa; } ?>"><br/><br/>
		
        Kelas<br/>
        <select name="kelas">
        <?php foreach ($kelas as $row){ ?>
        	<option value="<?php echo $row->id_kelas;?>"> <?php echo $row->kelas;?></option>
        	<?php }?>
        </select>
        <br/><br/>
		
		
        <input type="submit" name="btnTambah" value="Simpan"/>
        <a href="<?php echo base_url()?>Siswa/home">Kembali</a>
    </form>
		</p>
		</div>
	</body>
</html>