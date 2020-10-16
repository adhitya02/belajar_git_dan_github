<?php 
include 'koneksi.php'; 

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$asal_sekolah = $_POST['asal_sekolah'];

if(empty($nama && $alamat && $jk && $agama && $asal_sekolah) ) {
		header("location:daftar.php?failed");
	} else {
mysqli_query($koneksi, "INSERT INTO siswa VALUES('', '$nama', '$alamat', '$jk', '$agama', '$asal_sekolah')");
header("location:data_pendaftaran.php?success");
}
?>