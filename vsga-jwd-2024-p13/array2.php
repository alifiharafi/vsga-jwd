<?php

    /**
     * Mendefinisikan hanya satu variabel dengan struktur data array atau larik.
     * Mencetaknya menggunakan looping, berdasarkan indeks elemen array.
     */ 
    $produk = array(
        "Modem",
        "Harddisk",
        "Flashdisk"
    );

    // Dalam hal ini fungsi count() untuk menghitung jumlah elemen di dalam array.
    for($i = 0; $i < count($produk); $i++) {
        echo $produk[$i];
    }

?>