<?php

    /**
     * Mendefinisikan hanya satu variabel dengan struktur data array atau larik.
     */ 
    $hewan = array(
        "Burung",
        "Kucing",
        "Ikan"
    );

    echo '<pre>';
    echo print_r($hewan);
    echo '</pre>';
    echo "<hr>";


    // Menghapus Kucing melalui indeks elemen array
    unset($hewan[1]);

    echo '<pre>';
    echo print_r($hewan);
    echo '</pre>';
    echo "<hr>";


    echo $hewan[0] . "<br>";
    echo $hewan[1] . "<br>";
    echo $hewan[2] . "<br>";
    echo "<hr>";

    // Dalam hal ini fungsi count() untuk menghitung jumlah elemen di dalam array.
    for($i = 0; $i < count($hewan); $i++) {
        echo $hewan[$i] . "<br>";
    }
    echo "<hr>";

    // Dalam hal ini fungsi count() untuk menghitung jumlah elemen di dalam array.
    foreach($barang as $b) {
        echo $b . "<br>";
    }
    echo "<hr>";

    $i = 0;
    while($i < count($barang)) {
        echo $barang[$i] . "<br>";
        $i++;
    }

?>