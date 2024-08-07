<?php

    /**
     * Menambahkan elemen array dapat dilakukan dengan cara:
     * 1. Menggunakan nomor indeks array.
     * 2. Menggunakan kurung siku "khas" array untuk menambahkan pada baris terakhir.
     */ 
    $hobi = array(
        "Membaca",
        "Menulis",
        "Ngeblog"
    );

    // Menambahkan elemen pada indeks ke-3
    $hobi[3] = "Coding";

    // Dalam hal ini menggunakan print_r() untuk bisa melihat nilai dan tipe data pada array.
    // Sekaligus menggunakan tag HTML <pre> agar hasil dari print_r() terlihat lebih mudah dibaca.
    echo '<pre>';
    echo print_r($barang);
    echo '</pre>';
    echo "<hr>";

    // Menambahkan elemen pada indeks terakhir
    $hobi[] = "Olahraga";

    // Dalam hal ini menggunakan foreach() untuk menampilkan nilai setiap elemen di dalam array.
    foreach($hobi as $h) {
        echo $h . "<br>";
    }
    echo "<hr>";

?>