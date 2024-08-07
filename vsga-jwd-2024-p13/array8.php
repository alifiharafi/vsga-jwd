<?php

    /**
     * Mendefinisikan hanya satu variabel dengan struktur data array atau larik.
     */ 
    $barang = array(
        "Buku Tulis",
        "Penghapus",
        "Spidol"
    );

    echo $barang[0] . "<br>";
    echo $barang[1] . "<br>";
    echo $barang[2] . "<br>";
    echo "<hr>";

    // Dalam hal ini menggunakan print_r() untuk bisa melihat nilai dan tipe data pada array.
    // Sekaligus menggunakan tag HTML <pre> agar hasil dari print_r() terlihat lebih mudah dibaca.
    echo '<pre>';
    echo print_r($barang);
    echo '</pre>';
    echo "<hr>";

    // Dalam hal ini fungsi count() untuk menghitung jumlah elemen di dalam array.
    for($i = 0; $i < count($barang); $i++) {
        echo $barang[$i] . "<br>";
    }
    echo "<hr>";

?>