<?php

	// Membuat array produk (pembaruan dari kasus array1.php)
	$produk = ["Modem", "Harddisk", "Flashdisk"];

	// Menampilkan produk satu per satu
	echo $produk[0] . "<br>";
	echo $produk[1] . "<br>";
	echo $produk[2] . "<br>";

	// Garis pembatas
	echo "<hr>";

	// Menampilkan produk dengan perulangan (looping) for
	for($i = 0; $i < count($produk); $i++) {
		echo $produk[$i] . "<br>";
	}

	// Garis pembatas
	echo "<hr>";

	// Menampilkan produk dengan perulangan (looping) foreach
	// Jika isi array akan ditampilkan seluruhnya tanpa memperhatikan indeks, direkomendasikan menggunakan foreach
	foreach($produk as $isi) {
		echo $isi . "<br>";
	}

	// Garis pembatas
	echo "<hr>";

	// Menampilkan produk dengan perulangan (looping) while
	$i = 0;
	while($i < count($produk)) {
		echo $produk[$i] . "<br>";
		$i++;
	}

?>