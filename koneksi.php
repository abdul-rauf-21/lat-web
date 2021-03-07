<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'pendaftaran_siswa');

if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>