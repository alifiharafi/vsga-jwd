<html>
	<head>
		<title>Data Mahasiswa</title>
	</head>
	<body>
		<h2>Data Mahasiswa</h2>
		<table border="1">
			<tr>
				<td>No.</td>
				<td>NIM</td>
				<td>Nama</td>
				<td>Gender</td>
				<td>Jurusan</td>
				<td>Aksi</td>
			</tr>
			<?php
				include 'koneksi-db.php';

				$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
				$no = 1;

				foreach ($mahasiswa as $row) {
					$jenis_kelamin = ($row['jenis_kelamin'] == 'P') // if
					 				? 'Perempuan' 
					 				: 'Laki-laki'; // else

					echo "
						<tr>
							<td>" . $no . "</td>
							<td>" . $row['nim'] . "</td>
							<td>" . $row['nama'] . "</td>
							<td>" . $jenis_kelamin . "</td>
							<td>" . $row['jurusan'] . "</td>
							<td>
								<a href='form-edit.php?id_mhs=" . $row['id_mhs'] . "'>Edit</a> | 
								<a href='delete.php?id_mhs=" . $row['id_mhs'] . "' onclick='confirmDelete()'>Delete</a>
							</td>
						</tr>
					";
					$no++;
				}
			?>
		</table>
	<script>
		function confirmDelete() {
			return result = confirm('Apakah yakin akan dihapus?');
		}
	</script>
	</body>
</html>