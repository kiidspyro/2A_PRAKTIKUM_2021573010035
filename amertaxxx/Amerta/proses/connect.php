<?php
$conn = mysqli_connect("localhost", "root", "", "db_amerta");
if (!$conn) {
    echo "Gagal koneksi database";
}
