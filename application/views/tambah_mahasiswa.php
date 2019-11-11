<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Tambah Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Pemrograman Web Framework Lanjut</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3> Form Tambah Mahasiswa</h3>

			<hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/mahasiswa/insert">
				<div class="form-group">
					<label>Nim:</label>
					<input type="number" class="form-control" name="nim">
				</div>
				<div class="form-group">
					<label>Nama Mahasiswa:</label>
					<input type="text" class="form-control" name="nama_mahasiswa">
				</div>
				<div class="form-group">
					<label>Jenis Kelamin:</label>
					<input type="text" class="form-control" name="jenis_kelamin">
				</div>
				<div class="form-group">
					<label>Alamat Lengkap:</label>
					<input type="text" class="form-control" name="alamat_lengkap">
				</div>
				<div class="form-group">
					<label>Nomer Hp:</label>
					<input type="number" class="form-control" name="nomer_hp">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>