<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$name = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$level = (isset($_POST['level'])) ? htmlentities($_POST['level']) : "";
$nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$password = md5('password');

if (!empty($_POST['input_user_validate'])) {
    $select = mysqli_query($conn, "SELECT * FROM tb_user where username = '$username'");
    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert("Username yang anda masukkan sudah ada");
        window.location="../user"</script>';
    } else {
        $query = mysqli_query($conn, "UPDATE tb_user SET nama='$name',username='$username',
    level='$level',nohp='$nohp',alamat='$alamat' WHERE id='$id'");
        if ($query) {
            $message = '<script>alert("Data Anda sudah Berhasil Diperbarui");
        window.location="../user"</script>';
        } else {
            $message = '<script>alert("Data Anda Gagal DiPerbarui")</script>';
        }
    }
}
echo $message;