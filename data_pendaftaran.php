<!DOCTYPE html>
<html>
<head>
	<title>Tabel Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<style>
		.container {
			
		}

		h1 {
			text-align: center;
		}

		table {
			margin: 0 auto;
			border: 1px solid gainsboro;
		}

		h1 {
			padding-top: 50px;
		}

		table {
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Digital Talent</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="data_pendaftaran.php">Data</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
	<?php 
if(isset($_POST['cari'])){
	$cari = $_POST['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
  </div>
</nav>
	<div class="container">
		<table class="table table-bordered">
			<h1>Data Pendaftaran</h1><br>
			<a href="daftar.php" class="btn" style="background: dodgerblue; color: white; margin-bottom: 20px">Tambah Data</a>
			<table border="1" class="table" cellpadding="10" cellspacing="0">
		<thead>
		    <tr>
		      <th scope="col" class="text-center">No</th>
		      <th scope="col" class="text-center">Nama</th>
		      <th scope="col" class="text-center">Alamat</th>
		      <th scope="col" class="text-center">Jenis Kelamin</th>
		      <th scope="col" class="text-center">Agama</th>
		      <th scope="col" class="text-center">Asal Sekolah</th>
		      <th scope="col" class="text-center">Aksi</th>
		    </tr>
		</thead>
		<?php 
		include "koneksi.php";
		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
		$query_mysqli = mysqli_query($koneksi, "SELECT * FROM siswa where nama like '%".$cari."%'");
		}else{
		$query_mysqli = mysqli_query($koneksi, "SELECT * FROM siswa")or die(mysqli_error());
		}
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysqli)) : ?>
		<tbody>
		<tr>
			<th class="text-center"><?php echo $nomor++; ?></th>
			<td class="text-center"><?php echo $data['nama']; ?></td>
			<td class="text-center"><?php echo $data['alamat']; ?></td>
			<td class="text-center"><?php echo $data['jk']; ?></td>
			<td class="text-center"><?php echo $data['agama']; ?></td>
			<td class="text-center"><?php echo $data['asal_sekolah']; ?></td>
			<td class="text-center">
				<a href="editdatasiswa.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a>
        		<a href="hapusdatasiswa.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php endwhile; ?>
		</tbody>
	</table>
	</div>
</body>
</html>