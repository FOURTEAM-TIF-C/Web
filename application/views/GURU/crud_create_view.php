<!DOCTYPE html>
<html>
<head>
	<title>DEMO CRUD</title>
</head>
<body>
<h2>Demo Crud</h2>
<p><strong>Tambah Data</strong></p>

<form action="create" method="post">
	<?php echo $model->labels['nip']; ?><br/>
	<input type="text" name="nip" size="30" maxlength="10" /><br><br>

	<?php echo $model->labels['nama_guru']; ?><br/>
	<input type="text" name="nama_guru" size="30" maxlength="10" /><br><br>
	
<input type="submit" name="btnSubmit" value="Simpan"/>
<input type="button" name="Batal" value="BATAL" onclick="javascript:history.go(-1);"/>
</form>
</body>
</html>