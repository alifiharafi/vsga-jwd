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

    $random = array(
        "Burung",
        120,
        1.5,
        true,
        array('Buaya')
    );

    echo '<pre>';
    echo var_dump($random);
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
    foreach($hewan as $h) {
        echo $h . "<br>";
    }
    echo "<hr>";

    $i = 0;
    while($i < count($hewan)) {
        echo $hewan[$i] . "<br>";
        $i++;
    }

?>