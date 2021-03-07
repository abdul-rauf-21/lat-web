<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SMK IBNU SINA BATAM</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>
		<br>SMK IBNU SINA BATAM
	</h1>

	<?php

	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == 'gagal') {
			echo "<div class='alert'>Username dan password tidak sesuai !</div>";
		}
	}

	?>

	<div class="kotak-login">
		<p class="tulisan-login">Silahkan login</p>
		<form action="cek-login.php" method="post">
			<label>Username : </label>
			<input type="text" name="username" class="form_login" placeholder="Username..." required>

			<label>Password : </label>
			<input type="password" name="password" class="form_login" placeholder="Password..." required>

			<input type="submit" class="tombol_login" value="LOGIN">

			<br>
			<br>
		</form>
	</div>	
</body>
</html>