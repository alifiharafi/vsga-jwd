<?php

	/**
	 * Contoh 1: Membaca file teks satu baris dengan fgets
	 */
	// Membuka file dengan permission "read"
	$file = fopen("jwd.txt", "r");

	// Membaca teks satu baris pada file dan menampilkannya 
	echo fgets($file);

	// Menutup file
	fclose($file);

	// Memeriksa apakah function tersedia?
	// fgetss deprecated (usang) pada PHP v7.3.0
	// fgetss removed (dihapus) pada PHP v8.0
	echo function_exists('fgetss');

	// Garis pembatas
	echo "<hr>";


	/**
	 * Contoh 2: Membaca file teks beberapa baris dengan fgets
	 */
	// Membuka file dengan permission "read"
	$file = fopen("jwd.txt", "r");

	// Memeriksa apakah file dapat dibuka?
	if(!$file) {
		print('File tidak bisa diakses/dibuka!');
		exit;
	}

	// Perulangan sampai baris tidak ada lagi/habis, yang diperiksa dengan fungsi feof() -- end of line
	while(!feof($file)) {
		// Membaca teks setiap satu baris pada file dan menampilkannya 
		// Parameter/argumen kedua, yaitu: 50, bermaksud membatasi 50 karakter per baris
		$data = fgets($file, 50);

		// Menampilkan teks setiap satu baris
		echo $data . '<br>';
	}

	// Menutup file
	fclose($file);

?>