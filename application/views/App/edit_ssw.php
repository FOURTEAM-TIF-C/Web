<html>
	<head>
		<title>Edit Mahasiswa</title>
	</head>
	<body>
		<h4 align="center">Tambah Data Mahasiswa</h4>
		<div align="center">
		<p>
			<form method="post" action="<?php echo base_url()?>Siswa/update">
        NIS<br/><input type="text" name="nis" size="10" maxlength="10" value="<?php echo @$user[0]['nis']; ?>"><br/><br/>
		
        Nama<br/><input type="text" name="nama_siswa" size="30" maxlength="25" value="<?php echo @$user[0]['nama_siswa'];  ?>"><br/><br/>
		
        Kelas<br/>
        <?php
        echo '<select class="form-control" name="kelas">';
            foreach($kelas as $rows)
            {
                if($rows->id_kelas==@$user[0]['id_kelas']){
                    echo '<option value="'.$rows->id_kelas.'" selected="selected">'.$rows->kelas.'</option>';
                }else{
                    echo '<option value="'.$rows->id_kelas.'">'.$rows->kelas.'</option>';
                }
            }
            echo '</select>';
        ?>
        <br/><br/>
		
		
        <input type="submit" name="btnTambah" value="Simpan"/>
        <a href="<?php echo base_url()?>Siswa/home">Kembali</a>
    </form>
		</p>
		</div>
	</body>
</html>