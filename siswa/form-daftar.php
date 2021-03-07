<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pendaftaran Siswa Baru | SMK IBNU SINA BATAM</title>
</head>
<body>
	<!-- Bagian Judul -->
	<header>
		<h3>Formulir Pendaftaran Siswa Baru</h3>
	</header>

	<form action="proses-pendaftaran.php" method="POST">
		<fieldset>
			<!-- Bagian Nama -->
			<p>
				<label for="nama">Nama: </label>
				<input type="text" name="nama" placeholder="nama lengkap">
			</p>
			<!-- Bagian alamat -->
			<p>
				<label for="alamat">Alamat: </label>
				<textarea name="alamat"></textarea>
			</p>
			<!-- Bagian jenis kelamin -->
			<p>
				<label for="jenis_kelamin">Jenis Kelamin: </label>
				<label for=""><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
				<label for=""><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
			</p>
			<!-- Bagian agama -->
			<p>
				<label for="agama">Agama: </label>
				<select name="agama" id="">
					<option value="islam">Islam</option>
					<option value="kristen">Kristen</option>
					<option value="hindu">Hindu</option>
					<option value="budha">Budha</option>
					<option value="atheis">Atheis</option>
				</select>
			</p>
			<!-- Bagian sekolah asal -->
			<p>
				<label for="sekolah_asal">Sekolah asal :</label>
				<input type="text" name="sekolah_asal" placeholder="nama sekolah">
			</p>
			<!-- Bagian Tahun Masuk -->
			<p>
				<label for="tahun_masuk">Tahun masuk : </label>
				<input type="text" name="tahun_masuk" placeholder="tahun masuk">
			</p>
			<!-- Bagian daftar -->
			<p>
				<input type="submit" value="daftar" name="daftar">
			</p>
		</fieldset>	
	</form>

</body>
</html>