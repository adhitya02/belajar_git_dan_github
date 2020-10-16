<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$asal_sekolah = $_POST['asal_sekolah'];

if(empty($nama && $alamat && $jk && $agama && $asal_sekolah) ) {
	header("location:editdatasiswa.php?failed");
} else {
mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', alamat='$alamat', jk='$jk', agama='$agama', asal_sekolah='$asal_sekolah' WHERE id='$id' ");
header("location:data_pendaftaran.php?success");

}
 ?>

