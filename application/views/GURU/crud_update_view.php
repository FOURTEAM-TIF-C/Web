<!DOCTYPE html>
<html>
<head>
	<title>DEMO CRUD</title>
</head>
<body>
<h2>Demo Crud</h2>
<p><strong>UBAH DATA</strong></p>

<form action="create" method="POST">
	<?php echo $model->labels['nip']; ?><br/>
	<input type="text" name="nip" size="10" maxlength="10" value="<?php echo $model->nip; ?>" /><br><br>

	<?php echo $model->labels['nama_guru']; ?><br/>
	<input type="text" name="nama_guru" size="30" maxlength="25" value="<?php echo $model->nama_guru; ?>" /><br><br>


<input type="submit" name="btnSubmit" value="Simpan"/>
<input type="button" name="Batal" value="BATAL" onclick="javascript:history.go(-1);"/>

</form>
</body>
</html>