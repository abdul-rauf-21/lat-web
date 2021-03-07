<?php

include("../config.php");

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$sql = "DELETE FROM jurusan WHERE ID_jurusan = '$id'";
	$query = mysqli_query($db, $sql);

	($query) ? 
		header('Location: ../halaman-admin.php') :
		die("Gagal menghapus...");
} else {
	die("Akses dilarang");
}

?>