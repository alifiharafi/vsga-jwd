<?php

	// Pastikan telah melakukan create database sesuai instruksi pada file mysql/syntax.txt

	// Konfigurasi Database
	$host	= "localhost"; // Default host adalah localhost
	$user	= "root"; // Default user full access adalah root
	$pass	= ""; // Default password adalah "tanpa password"
	$db 	= "db_mhs"; // Nama database yang telah dibuat (lihat file mysql/syntax.txt)

	// Melakukan koneksi database
	$koneksi = mysqli_connect($host, $user, $pass, $db);

	// Memeriksa koneksi database
	if(!$koneksi) {
		echo 'Koneksi ke Database Gagal!';
	} else {
		echo 'Koneksi ke Database Berhasil!';
	}

?>