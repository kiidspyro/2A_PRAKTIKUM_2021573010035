<?php
    $str = "Belajar PHP menyenangkan";
    echo strtolower($str);    //Ubah Huruf Ke Kecil Semua
    echo "<br>";

    echo strtoupper($str);    //Ubah Huruf Ke Besar Semua
    echo "<br>";

    echo str_replace("Menyenangkan","mudah lho",$str);
    //mengganti string
?>