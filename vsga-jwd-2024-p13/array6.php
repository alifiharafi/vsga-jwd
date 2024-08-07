<?php

    /**
     * Membuat Array pada PHP
     */ 
    
    // Membuat array kosong
    $buah = array();

    // Mengisi nilai array berdasarkan indeks
    $buah[0] = "Apel"; 
    $buah[1] = "Pisang"; 
    $buah[2] = "Mangga"; 

    // Dalam hal ini menggunakan var_dump()untuk bisa melihat nilai dan tipe data pada array.
    // Sekaligus menggunakan tag HTML <pre> agar hasil dari var_dump() terlihat lebih mudah dibaca.
    echo '<pre>';
    echo var_dump($buah);
    echo '</pre>';

    // Membuat array kosong
    $item = array();

    // Mengisi nilai array dengan tipe data yang berbeda
    // Kode di bawah ini, sama saja seperti: $item["Bunga", 123, 39.12, true];
    $item[0] = "Bunga";
    $item[1] = 123;
    $item[2] = 39.12;
    $item[3] = true;

    // Dalam hal ini menggunakan var_dump() untuk bisa melihat nilai dan tipe data pada array.
    // Sekaligus menggunakan tag HTML <pre> agar hasil dari var_dump() terlihat lebih mudah dibaca.
    echo '<pre>';
    echo var_dump($item);
    echo '</pre>';

?>