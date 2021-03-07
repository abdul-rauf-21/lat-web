<?php 

include("../config.php");

// Cek apakah tombol sudah diklik atau belum
if (isset($_POST['daftar'])) {
	// ambil data dari formulir
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah_asal'];
	$tahun = $_POST['tahun_masuk']; 

	// buat query simpan data ke database
	$sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal, tahun_masuk) VALUES ('$nama', '$alamat', '$jk', '$agama', '$sekolah', '$tahun')";
	$query = mysqli_query($db, $sql);

	// Apakah query berhasil
	if ($query) {
		// alihkan ke index.php dengan status sukses
		header('Location: ../halaman-admin.php');
	} else {
		// alihkan ke index.php dengan status sukses
		header('Location: ../index.php?pesan=gagal');
	} 
} else {
	die("Akses dilarang.");
}

?>