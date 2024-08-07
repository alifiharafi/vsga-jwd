<?php

    /**
     * Membuat Array pada PHP
     */ 
    
    // Membuat array kosong
    $makanan = array();
    $minuman = array();

    // Dalam hal ini menggunakan var_dump()untuk bisa melihat nilai dan tipe data pada array.
    // Sekaligus menggunakan tag HTML <pre> agar hasil dari var_dump() terlihat lebih mudah dibaca.
    echo '<pre>';
    echo var_dump($makanan);
    echo var_dump($minuman);
    echo '</pre>';
    
    // Membuat array sekaligus memberikan nilai
    $makanan = array("Nasi Goreng", "Nasi Uduk", "Nasi Liwet");
    $minuman = array("Teh", "Kopi", "Susu");

    // Dalam hal ini menggunakan var_dump()untuk bisa melihat nilai dan tipe data pada array.
    // Sekaligus menggunakan tag HTML <pre> agar hasil dari var_dump() terlihat lebih mudah dibaca.
    echo '<pre>';
    echo var_dump($makanan);
    echo var_dump($minuman);
    echo '</pre>';

    // Membuat array sekaligus memberikan nilai, dengan cara menggunakan kurung siku
    $makanan = array("Soto Betawi", "Soto Madura", "Soto Padang");
    $minuman = array("Jahe Merah", "Wedang Uwuh", "Wedang Ronde");

    echo '<pre>';
    echo var_dump($makanan);
    echo var_dump($minuman);
    echo '</pre>';

?>