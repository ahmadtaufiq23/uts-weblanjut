<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Pemrograman Web Framework Lanjut</h1>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">

			<a href="<?php echo base_url(); ?>index.php/mahasiswa" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span> Tampilan Data Mahasiswa</a><br><br>

			<table class="table table-bordered table-striped">
				<thead>
					<br>
					<tr>
						<th>ID</th>
						<th>Nim</th>
						<th>No HP Lama</th>
						<th>No HP Baru</th>
						<th>Tanggal Diubah</th>

					</tr>
				</thead>
				<tbody>
					<?php
					foreach($logg as $log){
						?>
						<tr>
							<td><?php echo $log->id; ?></td>
							<td><?php echo $log->nim; ?></td>
							<td><?php echo $log->no_hp_lama; ?></td>
							<td><?php echo $log->no_hp_baru; ?></td>
							<td><?php echo $log->tgl_diubah; ?></td>

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