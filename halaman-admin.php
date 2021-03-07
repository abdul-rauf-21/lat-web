<?php include("config.php"); ?>

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

	<h1>Halaman admin</h1>

	<p>
		Halo <b><?= $_SESSION['username']; ?></b>. Anda telah login sebagai <b><?= $_SESSION['level']; ?></b>
		<a href="logout.php">LOGOUT</a>
	</p>

  <hr>

  <h3>Siswa yang sudah mendaftar</h3>

  <a href="siswa/form-daftar.php">[+] Tambah Baru</a>

  <br><br>
  <!-- Tabel -->
  <table border="1">
    <!-- header tabel -->
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Sekolah Asal</th>
        <th>Tahun Masuk</th>
        <th>Tindakan</th>
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

          echo "<td>";
          echo "<a href='siswa/form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
          echo "<a href='siswa/hapus.php?id=".$siswa['id']."'>Hapus</a>";
          echo "</td>";

          echo "</tr>";
        }

       ?>
    </tbody>
  </table>

  <p>Total: <?= mysqli_num_rows($query) ?></p>

  <hr>

  <h3>Daftar Jurusan</h3>

  <a href="jurusan/form-pendaftaran-jurusan.php">[+] Tambah Baru</a>

  <br><br>

  <table border="1">
    <thead>
      <tr>
        <th>ID Jurusan</th>
        <th>Nama Jurusan</th>
        <th>Tindakan</th>
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

          echo "<td>";
          echo "<a href='jurusan/form-edit-jurusan.php?id=".$jurusan['ID_jurusan']."'>Edit</a> | ";
          echo "<a href='jurusan/hapus-jurusan.php?id=".$jurusan['ID_jurusan']."'>Hapus</a>";
          echo "</td>";

          echo "</tr>";
        }
      ?>
    </tbody>
  </table>

  <p>Total: <?= mysqli_num_rows($query) ?></p>

</body>
</html>