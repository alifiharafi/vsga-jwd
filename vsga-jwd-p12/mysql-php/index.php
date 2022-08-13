<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h2>Daftar Mahasiswa</h2>

	<table border="1">
		<tr>
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Jurusan</th>
		</tr>

<?php

	// Menyertakan file koneksi.php untuk koneksi database
	include 'koneksi.php';

	// Syntax SQL pada database untuk melakukan seleksi semua data dari tabel mahasiswa
	$sql = "SELECT * FROM mahasiswa";

	// Melakukan query pada database berdasarkan syntax SQL
	$query = mysqli_query($koneksi, $sql);

	// Hasil dari query tabel mahasiswa dengan struktur data array association
	// Melakukan perulangan seluruh data mahasiswa menggunakan while
	while ($row = mysqli_fetch_assoc($query)) {

		// Debugging hasil query
		// echo '<pre>';
		// echo print_r($row);
		// echo '</pre>';

		echo "<tr>";
			echo "<td>{$row['id_mhs']}</td>";
			echo "<td>{$row['nim']}</td>";
			echo "<td>{$row['nama']}</td>";
			echo "<td>{$row['jenis_kelamin']}</td>";
			echo "<td>{$row['jurusan']}</td>";
		echo "</tr>";
	}

?>

	</table>
</body>
</html>