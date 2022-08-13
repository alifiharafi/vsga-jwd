<?php

	/**
	 * Array asosiatif
	 * Sering ditemukan saat terhubung dengan database, hasil query biasanya akan dalam bentuk array asosiatif. 
	 */

	// Membuat array baru
	$artikel = [
		"judul" => "Belajar Pemograman PHP",
		"penulis" => "Muhammad Riza",
		"dilihat" => 199
	];

	// Menampilkan artikel satu per satu
	echo $artikel["judul"] . "<br>";
	echo $artikel["penulis"] . "<br>";
	echo $artikel["dilihat"] . "<br>";

	// Garis pembatas
	echo "<hr>";

	// Menampilkan artikel dengan perulangan (looping) foreach
	foreach ($artikel as $isi) {
		echo $isi . "<br>";
	}

?>