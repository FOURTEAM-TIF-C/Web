<!DOCTYPE html>
<html>
<head>
	<title>DEMO CRUD</title>
</head>
<body>
<h2>Demo Crud</h2>
<p><strong>Tambah Data</strong></p>

<form action="create" method="post">
	<?php echo $model->labels['id_mapel']; ?><br/>
	<input type="text" name="id_mapel" size="30" maxlength="10" /><br><br>

	<?php echo $model->labels['nama_mapel']; ?><br/>
	<input type="text" name="nama_mapel" size="30" maxlength="100" /><br><br>
	
	<?php echo $model->labels['kkm']; ?><br/>
	<input type="text" name="kkm" size="30" maxlength="10" /><br><br>

<input type="submit" name="btnSubmit" value="Simpan"/>
<input type="button" name="Batal" value="BATAL" onclick="javascript:history.go(-1);"/>
</form>
</body>
</html>