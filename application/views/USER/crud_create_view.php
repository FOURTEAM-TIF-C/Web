<!DOCTYPE html>
<html>
<head>
	<title>DEMO CRUD</title>
</head>
<body>
<h2>Demo Crud</h2>
<p><strong>Tambah Data</strong></p>

<form action="create" method="post">
	<?php echo $model->labels['id_user']; ?><br/>
	<input type="text" name="id_user" size="30" maxlength="10" /><br><br>

	<?php echo $model->labels['nama_lengkap']; ?><br/>
	<input type="text" name="nama_lengkap" size="30" maxlength="100" /><br><br>

	<?php echo $model->labels['username']; ?><br/>
	<input type="text" name="username" size="30" maxlength="30" /><br><br>

	<?php echo $model->labels['password']; ?><br/>
	<input type="password" name="password" size="30" maxlength="10" /><br><br>

	<?php echo $model->labels['level']; ?><br/>
	<input type="text" name="level" size="30" maxlength="10" /><br><br>
	
<input type="submit" name="btnSubmit" value="Simpan"/>
<input type="button" name="Batal" value="BATAL" onclick="javascript:history.go(-1);"/>
</form>
</body>
</html>