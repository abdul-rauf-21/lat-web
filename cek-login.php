<?php

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' and password = '$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);

	if ($data['level'] == 'admin') {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = 'admin';
		header('location:halaman-admin.php');

	} else if ($data['level'] == 'pegawai') {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = 'pegawai';
		header('location:halaman-pegawai.php');

	}  else if ($data['level'] == 'pengurus') {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = 'pengurus';
		header('location:halaman-pengurus.php');

	}		
} else {
	header('location:index.php?pesan=gagal');
}
	
?>