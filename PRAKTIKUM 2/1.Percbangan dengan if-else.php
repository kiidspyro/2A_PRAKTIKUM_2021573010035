<?php
    date_default_timezone_set('Asia/Jakarta');
    $d = date("D");
    $date = date(("d-m-Y H:i:s"));
    if ($d == "MOn") {
        $d = "senin";
        echo "Selamat belajar <br>";
    } else
    echo "Ini hari $d <br>";
    echo $d . "" . $date;
    ?>