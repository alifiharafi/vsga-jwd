<?php

	/**
	 * Menambah isi array
	 */

	// Membuat array baru
	$hewan = [
		"Burung",
		"Kucing",
		"Ikan"
	];

	// Menambahkan isi pada indeks ke-3
	$hewan[3] = "Penguin";

	// Menambahkan isi pada indeks terakhir
	$hewan[] = "Beruang";

	// Menampilkan hewan dengan perulangan (looping) foreach
	foreach ($hewan as $isi) {
		echo $isi . "<br>";
	}

?>