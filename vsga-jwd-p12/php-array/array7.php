<?php

	/**
	 * Array multidimensi
	 * Umumnya dapat digunakan untuk matriks dan struktur data rumit lainnya. 
	 */
	$matrik = [
		[2, 3, 4],
		[7, 5, 0],
		[4, 3, 8]
	];
	
	// Mencetak array indeks ke-1 & 2
	echo $matrik[1][2];

	// Garis pembatas
	echo "<hr>";

	// Mencetak dengan perulangan sebanyak 1 kali
	for($i = 0; $i < count($matrik); $i++) {
		echo $matrik[$i][0] . ' ';
		echo $matrik[$i][1] . ' ';
		echo $matrik[$i][2] . ' ';
		echo '<br>';
	}

	// Garis pembatas
	echo "<hr>";

	// Mencetak dengan perulangan sebanyak 2 kali
	for($i = 0; $i < count($matrik); $i++) {
		for($j = 0; $j < count($matrik[0]); $j++) {
			echo $matrik[$i][$j] . ' ';		
		}
		echo '<br>';
	}


	// Garis pembatas
	echo "<hr>";

	// Membuat array baru
	$artikel = [
		[
			"judul" => "Belajar Pemograman PHP",
			"penulis" => "Muhammad Riza",
			"dilihat" => 123
		],
		[
			"judul" => "Belajar Pemograman JavaScript",
			"penulis" => "Djoko Cahyo",
			"dilihat" => 225
		],
		[
			"judul" => "Belajar Pemograman Java",
			"penulis" => "Bambang Wisnuadhi",
			"dilihat" => 993
		]
	];

	// Menampilkan artikel dengan perulangan (looping) foreach
	foreach ($artikel as $isi) {
		echo "<h3>" . $isi['judul'] . "</h3>";
		echo "<p>" . $isi['penulis'] . "</p>";
		echo "<p>" . $isi['dilihat'] . "</p>";
		echo "<hr>";
	}

?>