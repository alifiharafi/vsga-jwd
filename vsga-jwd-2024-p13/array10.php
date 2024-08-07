<?php

    /**
     * Foreach pada Array
     */ 
    
     // Membuat array kosong
    $buah = array();

    // Mengisi nilai array berdasarkan indeks
    $buah[0] = "Apel"; 
    $buah[1] = "Pisang"; 
    $buah[2] = "Mangga"; 


    // Dalam hal ini menggunakan foreach() untuk menampilkan nilai setiap elemen di dalam array.
    // Serta $nilai untuk setiap $h
    foreach($buah as $b => $nilai) {
        echo "Indeks ke-" . $b . ": " . $nilai . "<br>";
    }
    echo "<hr>";

?>