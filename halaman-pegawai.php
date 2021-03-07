<?php include "config.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman admin</title>
</head>
<body>
	<?php 

	session_start();

	if ($_SESSION['level'] == '') {
		header('location:index.php?pesan=gagal');
	}

	?>

	<h1>Halaman pegawai</h1>

	<p>
		Halo <b><?= $_SESSION['username']; ?></b>. Anda telah login sebagai <b><?= $_SESSION['level']; ?></b>
		<a href="logout.php">LOGOUT</a>
	</p>

  <hr>

  <h3>Siswa yang sudah mendaftar</h3>

  <table border="1">
    <!-- header tabel -->
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Sekolah Asal</th>
        <th>Tahun Masuk</th>
      </tr>
    </thead>
    <!-- isi tabel -->
    <tbody>
      <?php 
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while ($siswa = mysqli_fetch_array($query)) {
          echo "<tr>";

          echo "<td>".$siswa['id']."</td>";
          echo "<td>".$siswa['nama']."</td>";
          echo "<td>".$siswa['alamat']."</td>";
          echo "<td>".$siswa['jenis_kelamin']."</td>";
          echo "<td>".$siswa['agama']."</td>";
          echo "<td>".$siswa['sekolah_asal']."</td>";
          echo "<td>".$siswa['tahun_masuk']."</td>";

          echo "</tr>";
        }

       ?>
    </tbody>
  </table>

  <p>Total: <?= mysqli_num_rows($query) ?></p>

  <hr>

  <h3>Daftar Jurusan</h3>

  <table border="1">
    <thead>
      <tr>
        <th>ID Jurusan</th>
        <th>Nama Jurusan</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "SELECT * FROM jurusan";
        $query = mysqli_query($db, $sql);

        while ($jurusan = mysqli_fetch_array($query)) {
          echo "<tr>";

          echo "<td>".$jurusan['ID_jurusan']."</td>";
          echo "<td>".$jurusan['nama_jurusan']."</td>";

          echo "</tr>";
        }
      ?>
    </tbody>
  </table>

  <p>Total: <?= mysqli_num_rows($query) ?></p>

</body>
</html>