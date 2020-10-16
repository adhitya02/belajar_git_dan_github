<!DOCTYPE html>
<html>
<head>
	<title>Daftar Siswa</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<style>
		.col-md-4col-md-offset-4{
    		margin-top: 20px;
    	}

    	body {
    		width: 1000px;
    		background-image: url(assets/img/bg.png);
    	}

    	.container {
    		width: 100%;
    		margin-left: 370px;
    		padding-left: 100px;
    	}

    	table {
    		margin-left: 190px;
    	}

    	h2 {
    		margin-left: 190px;
    	}

    	h3 {
    		margin-left: 190px;	
    		width: 100%;
    	}

    	p {
    		margin-left: 270px;
    		width: 100%;
    	}

	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-4 col-md-offset-4">
		<div  class="panel panel-info">
		<div class="panel-heading">
			<h2>DAFTAR</h2>
			<h3>Siswa digital talent</h3>
			<?php if( isset($_GET['success']) ) : ?>
				<p>Alhamdulillah Data Masuk</p>
			<?php endif; ?>
			<?php if( isset($_GET['failed']) ) : ?>
				<p style="color: red;"><i>Harap masukan data!</i></p>
			<?php endif; ?>

	</div>	
	<div class="panel-body">
		
	<form action="proses.php" method="post">
		<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<input class="form-control" type="text" name="nama" placeholder="Masukan Nama">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat" placeholder="  Masukan Alamat"></textarea>
				</td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="laki-laki" checked>
					  <label class="form-check-label" for="exampleRadios1">
					   Laki-laki
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="perempuan">
					  <label class="form-check-label" for="exampleRadios2">
					    Perempuan
					  </label>
					 </div>
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>
					<select name="agama">
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen</option>
						<option value="Hindu">Hindu</option>
						<option value="Budha">Budha</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Asal Sekolah</td>
				<td>:</td>
				<td>
					<input class="form-control" type="text" name="asal_sekolah" placeholder="Masukan Asal Sekolah">
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<button class="btn btn-primary">Kirim</button>
				</td>
			</tr>
		</table>
	</form>
</div>
</div>
</div>
</body>
</html>