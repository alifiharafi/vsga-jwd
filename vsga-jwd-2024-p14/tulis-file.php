<?php

	/**
	 * Contoh 1: Menulis file teks dengan fwrite
	 */
	$file = fopen("vsga.txt", "w");

	echo fwrite($file, 
		"Hari ini adalah hari Jum'at, tanggal 09 Agustus 2024.\n" .
		"Hari ini diadakan Pertemuan ke-14 untuk VSGA JWD Kelas A.\n" .
		"Besok adalah hari Sabtu! Bisa liburan!");

	fclose($file);


	/**
	 * Contoh 2: Menulis file teks dengan fwrite dan looping
	 */
	$file = fopen("vsga-loop.txt", "w");

	$text = array(
		"Hari ini adalah hari Jum'at, tanggal 09 Agustus 2024.\n",
		"Hari ini diadakan Pertemuan ke-14 untuk VSGA JWD Kelas A.\n",
		"Besok adalah hari Sabtu! Bisa liburan!"
	);

	echo "<pre>";
	var_dump($text);
	echo "</pre>";

	foreach($text as $t) {
		echo fwrite($file, $t);
	}

	fclose($file);

?>