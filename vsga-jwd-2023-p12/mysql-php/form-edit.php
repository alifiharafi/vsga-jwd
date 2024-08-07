<?php
	include 'koneksi-db.php';

	// Kondisi 1: Jika tidak ada proses submit, maka tampilkan form 
	if(!isset($_POST['submit'])) {

		$id_mhs 	= $_GET['id_mhs']; // menerima nilai dari method GET

		// seleksi data mahasiswa berdasarkan `id_mhs`
		$query 		= "SELECT * FROM mahasiswa WHERE id_mhs = " . $id_mhs;
		$mahasiswa 	= mysqli_query($koneksi, $query);
		$row 		= mysqli_fetch_array($mahasiswa);

		// echo '<pre>';
		// var_dump($row);
		// echo '</pre>';
		// exit;
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
					<td><input type="text" name="nim" value="<?php echo $row['nim']; ?>" /></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $row['nama']; ?>" /></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						<?php
							$p_checked = '';
							$l_checked = '';

							if($row['jenis_kelamin'] == "P") {
								$p_checked = 'checked';
							} else {
								$l_checked = 'checked';
							}
						?>
						<input type="radio" name="jenis_kelamin" value="L" <?php echo $l_checked; ?> />
						<label>Laki-laki</label>
						<input type="radio" name="jenis_kelamin" value="P" <?php echo $p_checked; ?> />
						<label>Perempuan</label>
					</td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>
						<?php
							$jurusan = array(
								'Teknik Informatika',
								'Teknik Mesin',
								'Teknik Kimia',
								'Sistem Informasi'
							);
						?>

						<select name="jurusan">
							<?php
								foreach ($jurusan as $opsi) {
									if($opsi == $row['jurusan']) {
										$selected = "selected";
									} else {
										$selected = "";
									}
									echo '<option value="' . $opsi . '" ' . $selected . '>' . $opsi . '</option>';
								}
							?>							
						</select>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>
						<input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" />
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

		// menerima dan menyimpan data dari form ke variabel
		$nim 			= $_POST['nim']; 
		$nama 			= $_POST['nama']; 
		$jurusan 		= $_POST['jurusan']; 
		$jenis_kelamin 	= $_POST['jenis_kelamin']; 
		$alamat 		= $_POST['alamat']; 

		// syntax SQL untuk penyimpanan atau insert data ke database
		$query = "UPDATE mahasiswa SET
					nim = '{$nim}',
					nama = '{$nama}',
					jurusan = '{$jurusan}',
					jenis_kelamin = '{$jenis_kelamin}',
					alamat = '{$alamat}'
				WHERE id_mhs = {$_GET['id_mhs']}";

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