<?php 

include("../config.php");

if (isset($_POST['daftar_jurusan'])) {
	$nama_jurusan = $_POST['nama_jurusan'];

	$sql = "INSERT INTO jurusan (nama_jurusan) VALUES ('$nama_jurusan')";

	$query = mysqli_query($db, $sql);

	header(
		($query) ?
		'Location:	../halaman-admin.php' :
		'Location: ../index.php?pesan=gagal'
	);  
} else {
	die("Akses dilarang");
}

?>