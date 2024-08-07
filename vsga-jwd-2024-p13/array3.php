<?php

    /**
     * Array pada PHP
     */ 

    // Mendeklarasikan array kosong
    $fruits = array();

    // Mendeklarasikan dan menginisialisasi array dengan elemen
    $colors = array('red', 'green', 'blue');

    // Mendeklarasikan array asosiatif
    $person = array('name' => 'John', 'age' => 30, 'city' => 'New York');

    // Array dapat berisi tipe data yang berbeda
    $mixedArray = array('apple', 3, true, array('name' => 'Alice'));

    // Dalam hal ini menggunakan var_dump()untuk bisa melihat nilai dan tipe data pada array.
    // Sekaligus menggunakan tag HTML <pre> agar hasil dari var_dump() terlihat lebih mudah dibaca.
    echo '<pre>';
    echo var_dump($mixedArray);
    echo '</pre>';

    // Mengakses elemen array melalui indeks array
    echo $colors[0]; // Output: 'red'

?>