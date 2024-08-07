<?php

	include 'koneksi-db.php';

	$id_mhs			= $_GET['id_mhs']; // menerima nilai dari method GET

	// hapus data mahasiswa berdasarkan `id_mhs`
	$query 			= "DELETE FROM mahasiswa WHERE id_mhs = " . $id_mhs;
	$query_success 	= mysqli_query($koneksi, $query);

	// mengalihkan halaman setelah proses query selesai
	if($query_success) {
		header("location: index.php");	
	} else {
		echo 'Proses penyimpanan data gagal!';
	}

?>