<?php  

include("../config.php");

if (isset($_POST['simpan'])) {
	$id = $_POST['id'];
	$nama_jurusan = $_POST['nama_jurusan'];

	$sql = "UPDATE jurusan SET nama_jurusan = '$nama_jurusan' WHERE ID_jurusan = '$id'";
	$query = mysqli_query($db, $sql);

	($query) ?
		header('Location: ../halaman-admin.php') :
		die("Gagal menyimpan perubahan...");
} else {
	die("Akses dilarang...");
}

?>