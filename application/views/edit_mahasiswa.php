<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Edit Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Pemrograman Web Framework Lanjut</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Form Edit Mahasiswa</h3>
			
			<hr>
			<?php extract($mhs); ?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/mahasiswa/update/<?php echo $id; ?>">
				<div class="form-group">
					<label>Nim:</label>
					<input type="number" class="form-control" value="<?php echo $nim; ?>" name="nim">
				</div>
				<div class="form-group">
					<label>Nama Mahasiswa:</label>
					<input type="text" class="form-control" value="<?php echo $nama_mahasiswa; ?>" name="nama_mahasiswa">
				</div>
				<div class="form-group">
					<label>Jenis Kelamin:</label>
					<input type="text" class="form-control" value="<?php echo $jenis_kelamin; ?>" name="jenis_kelamin">
				</div>
				<div class="form-group">
					<label>Alamat Lengkap:</label>
					<input type="text" class="form-control" value="<?php echo $alamat_lengkap; ?>" name="alamat_lengkap">
				</div>
				<div class="form-group">
					<label>Nomer Hp:</label>
					<input type="number" class="form-control" value="<?php echo $nomer_hp; ?>" name="nomer_hp">
				</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>