<?php

	/**
	 * Contoh 1: Menggunakan json_encode saat operasi menulis file
	 */
	$file = fopen("vsga-loop.json", "w");

	$text = array(
		"nama_lengkap" => "Fikri",
		"kode_peserta" => 1920001,
		"kelas" => "A"
	);

	$text_json = json_encode($text);

	echo fwrite($file, $text_json);

	/**
	 * Contoh 2: Menggunakan json_decode saat operasi membaca file
	 */
	$file = fopen("vsga-loop.json", "r");

	// Membaca teks hanya satu baris pada file dan menampilkannya 
	$text_raw = fgets($file);

	$text = json_decode($text_raw);

	echo "<pre>";
	var_dump($text);
	echo "</pre>";

	// Menutup file
	fclose($file);