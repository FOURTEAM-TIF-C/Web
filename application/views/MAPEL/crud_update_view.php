<!DOCTYPE html>
<html>
<head>
	<title>DEMO CRUD</title>
</head>
<body>
<h2>Demo Crud</h2>
<p><strong>UBAH DATA</strong></p>

<form action="create" method="POST">
	<?php echo $model->labels['id_mapel']; ?><br/>
	<input type="text" name="id_mapel" size="10" maxlength="10" value="<?php echo $model->id_mapel; ?>" /><br><br>

	<?php echo $model->labels['nama_mapel']; ?><br/>
	<input type="text" name="nama_mapel" size="30" maxlength="100" value="<?php echo $model->nama_mapel; ?>" /><br><br>

	<?php echo $model->labels['kkm']; ?><br/>
	<input type="text" name="kkm" size="30" maxlength="10" value="<?php echo $model->kkm; ?>" /><br><br>

<input type="submit" name="btnSubmit" value="Simpan"/>
<input type="button" name="Batal" value="BATAL" onclick="javascript:history.go(-1);"/>

</form>
</body>
</html>