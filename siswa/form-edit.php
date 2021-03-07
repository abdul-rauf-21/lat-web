<?php 

include("../config.php");

if (!isset($_GET['id'])) {
	header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id = $id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
	die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulir Edit Siswa | SMK IBNU SINA BATAM</title>
</head>
<body>
	<header>
		<h3>Formulir Edit Siswa</h3>
	</header>

	<form action="proses-edit.php" method="POST">
		<fieldset>
			<input type="hidden" name="id" value="<?= $siswa['id'] ?>">

			<!-- Bagian Nama -->
			<p>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" placeholder="nama lengkap" value="<?= $siswa['nama'] ?>">
			</p>

			<!-- Bagian Alamat -->
			<p>
				<label for="alamat">Alamat : </label>
				<textarea name="alamat">
					<?= $siswa['alamat'] ?>
				</textarea>
			</p>

			<!-- Bagian Jenis Kelamin -->
			<p>
				<label for="jenis_kelamin">Jenis Kelamin : </label>
				<?php $jk = $siswa['jenis_kelamin'] ?>
				<label>
					<input type="radio" name="jenis_kelamin" value="laki-laki" <?= ($jk == 'laki-laki') ? "checked" : "" ?> >
					Laki-Laki
				</label>
				<label>
					<input type="radio" name="jenis_kelamin" value="perempuan" <?= ($jk == 'perempuan') ? "checked" : "" ?> >
					Perempuan
				</label>
			</p>

			<!-- Bagian Agama -->
			<p>
				<label for="agama">Agama : </label>
				<?php $agama = $siswa['agama'] ?>
				<select name="agama">
					<option <?= ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
					<option <?= ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
					<option <?= ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
					<option <?= ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
					<option <?= ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
				</select>
			</p>

			<!-- Bagian Sekolah Asal -->
			<p>
				<label for="sekolah_asal">Sekolah Asal : </label>
				<input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?= $siswa['sekolah_asal'] ?>">
			</p>

			<!-- Bagian Tahun Masuk -->

			<p>
				<label for="tahun_masuk">Tahun Masuk</label>
				<input type="text" name="tahun_masuk" placeholder="tahun masuk" value="<?= $siswa['tahun_masuk'] ?>">
			</p>

			<!-- Bagian Tombol Simpan -->
			<p>
				<input type="submit" value="simpan" name="simpan">
			</p>
		</fieldset>
	</form>
</body>
</html>