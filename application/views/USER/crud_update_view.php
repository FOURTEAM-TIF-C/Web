<!DOCTYPE html>
<html>
<head>
	<title>DEMO CRUD</title>
</head>
<body>
<h2>Demo Crud</h2>
<p><strong>UBAH DATA</strong></p>

<form action="create" method="POST">
	<?php echo $model->labels['id_user']; ?><br/>
	<input type="text" name="id_user" size="10" maxlength="10" value="<?php echo $model->id_user; ?>" /><br><br>

	<?php echo $model->labels['nama_lengkap']; ?><br/>
	<input type="text" name="nama_lengkap" size="30" maxlength="25" value="<?php echo $model->nama_lengkap; ?>" /><br><br>

	<?php echo $model->labels['username']; ?><br/>
	<input type="text" name="username" size="30" maxlength="25" value="<?php echo $model->username; ?>" /><br><br>

	<?php echo $model->labels['password']; ?><br/>
	<input type="password" name="password" size="30" maxlength="25" value="<?php echo $model->password; ?>" /><br><br>

<?php echo $model->labels['level']; ?><br/>
	<input type="level" name="level" size="30" maxlength="25" value="<?php echo $model->level; ?>" /><br><br>


<input type="submit" name="btnSubmit" value="Simpan"/>
<input type="button" name="Batal" value="BATAL" onclick="javascript:history.go(-1);"/>

</form>
</body>
</html>