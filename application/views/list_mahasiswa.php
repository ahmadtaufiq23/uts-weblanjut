<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Pemrograman Web Framework Lanjut</h1>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<a href="<?php echo base_url(); ?>index.php/mahasiswa/tambah" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Mahasiswa</a> 

			<a href="<?php echo base_url(); ?>index.php/log" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-right"></span> Tampilan LOG</a><br><br>

			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nim</th>
						<th>Nama Mahasiswa</th>
						<th>Jenis Kelamin</th>
						<th>Alamat Lengkap</th>
						<th>Nomer Hp</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($mahasiswa as $mhs){
						?>
						<tr>
							<td><?php echo $mhs->id; ?></td>
							<td><?php echo $mhs->nim; ?></td>
							<td><?php echo $mhs->nama_mahasiswa; ?></td>
							<td><?php echo $mhs->jenis_kelamin; ?></td>
							<td><?php echo $mhs->alamat_lengkap; ?></td>
							<td><?php echo $mhs->nomer_hp; ?></td>
							
							<td><a href="<?php echo base_url(); ?>index.php/mahasiswa/edit/<?php echo $mhs->id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a>

							 <a href="<?php echo base_url(); ?>index.php/mahasiswa/delete/<?php echo $mhs->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							</td>

						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>