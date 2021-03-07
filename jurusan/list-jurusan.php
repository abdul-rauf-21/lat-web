<?php include("../config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pendaftaran Jurusan Baru | SMK IBNU SINA BATAM</title>
</head>
<body>
	<header>
		<h3>Daftar Jurusan</h3>
	</header>

	<nav>
		<a href="form-pendaftaran-jurusan.php">[+] Tambah Baru</a>
	</nav>

	<br>

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
					echo "<a href='form-edit-jurusan.php?id=".$jurusan['ID_jurusan']."'>Edit</a> | ";
					echo "<a href='hapus-jurusan.php?id=".$jurusan['ID_jurusan']."'>Hapus</a>";
					echo "</td>";

					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>	