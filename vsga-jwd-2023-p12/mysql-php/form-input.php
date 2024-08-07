<?php
	
	// Kondisi 1: Jika tidak ada proses submit, maka tampilkan form 
	if(!isset($_POST['submit'])) {
?>

<html>
	<head>
		<title>Form Input Data Mahasiswa</title>
	</head>
	<body>
		<h2>Form Input Data Mahasiswa</h2>

		<form method="post" action="">
			<table>
				<tr>
					<td>NIM</td>
					<td><input type="text" name="nim" /></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" /></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						<input type="radio" name="jenis_kelamin" value="L" />
						<label>Laki-laki</label>
						<input type="radio" name="jenis_kelamin" value="P" />
						<label>Perempuan</label>
					</td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>
						<select name="jurusan">
							<option value="Teknik Informatika">Teknik Informatika</option>
							<option value="Teknik Mesin">Teknik Mesin</option>
							<option value="Teknik Kimia">Teknik Kimia</option>
							<option value="Teknik Kimia">Sistem Informasi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>
						<input type="text" name="alamat" />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<button type="submit" name="submit" value="submit">Simpan</button>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>

<?php

	}
	
	// Kondisi 2: Jika ada proses submit (tombol Simpan ditekan), maka lakukan proses penyimpanan ke database
	else {

		include 'koneksi-db.php';

		// menerima dan menyimpan data dari form ke variabel
		$nim 			= $_POST['nim']; 
		$nama 			= $_POST['nama']; 
		$jurusan 		= $_POST['jurusan']; 
		$jenis_kelamin 	= $_POST['jenis_kelamin']; 
		$alamat 		= $_POST['alamat']; 

		// syntax SQL untuk penyimpanan atau insert data ke database
		$query = "INSERT INTO mahasiswa SET
					nim = '{$nim}',
					nama = '{$nama}',
					jurusan = '{$jurusan}',
					jenis_kelamin = '{$jenis_kelamin}',
					alamat = '{$alamat}'
				";

		// var_dump($query);

		$query_success = mysqli_query($koneksi, $query);

		// mengalihkan halaman setelah proses query selesai
		if($query_success) {
			header("location: index.php");	
		} else {
			echo 'Proses penyimpanan data gagal!';
		}

	}

?>