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

	<h1>Halaman pengurus</h1>

	<p>
		Halo <b><?= $_SESSION['username']; ?></b>. Anda telah login sebagai <b><?= $_SESSION['level']; ?></b>
		<a href="logout.php">LOGOUT</a>
	</p>
  <!-- <div w3-include-html="akun/list-akun.html"></div> -->
</body>
</html>