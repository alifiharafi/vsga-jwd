<?php

	/**
	 * Menghapus isi array
	 */

	// Membuat array baru
	$hewan = [
		"Burung",
		"Kucing",
		"Ikan"
	];

	// Menghapus isi array dengan nilai "Kucing"
	unset($hewan[1]);

	// Menampilkan hewan dengan perulangan (looping) foreach
	foreach ($hewan as $isi) {
		echo $isi . "<br>";
	}

	// Garis pembatas
	echo "<hr>";

	// Debugging isi array dengan print_r(), disertai pre-formatted HTML agar lebih mudah dibaca
	echo "<pre>";
	print_r($hewan);
	echo "</pre>";

	// Garis pembatas
	echo "<hr>";

	// Debugging isi array dengan var_dump(), disertai pre-formatted HTML agar lebih mudah dibaca
	echo "<pre>";
	var_dump($hewan);
	echo "</pre>";

?>