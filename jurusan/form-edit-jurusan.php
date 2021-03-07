<?php 

include("../config.php");

if (!isset($_GET['id'])) {
	header('Location: list-jurusan.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM jurusan WHERE ID_jurusan = $id";
$query = mysqli_query($db, $sql);
$jurusan = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
	die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulir Edit Jurusan | SMK IBNU SINA BATAM</title>
</head>
<body>
	<header>
		<h3>Formulir Edit Siswa</h3>
	</header>

	<form action="proses-edit-jurusan.php" method="POST">
		<fieldset>
			<input type="hidden" name="id" value="<?= $jurusan['ID_jurusan'] ?>">

			<p>
				<label for="nama-jurusan">Nama jurusan : </label>
				<input type="text" name="nama_jurusan" value="<?= $jurusan['nama_jurusan'] ?>">
			</p>

			<p>
				<input type="submit" value="simpan" name="simpan">
			</p>
		</fieldset>
	</form>
</body>
</html>