<?php
session_start();
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$passwordlama = (isset($_POST['passwordlama'])) ? md5(htmlentities($_POST['passwordlama'])) : "";
$passwordbaru = (isset($_POST['passwordbaru'])) ? md5(htmlentities($_POST['passwordbaru'])) : "";
$repasswordbaru = (isset($_POST['repasswordbaru'])) ? md5(htmlentities($_POST['repasswordbaru'])) : "";

if(!empty($_POST['ubah_password_validate'])){
    $query  = mysqli_query($conn,"SELECT * FROM tb_user WHERE username = '$_SESSION[username]' && password = '$passwordlama'");
    $hasil = mysqli_fetch_array($query);
    if($hasil){
        if($passwordbaru == $repasswordbaru){
            $query = mysqli_query($conn, "UPDATE tb_user SET password='$passwordbaru' WHERE username = '$_SESSION[username_decafe]'");
            if($query) {
                $message = '<script>alert("Password Berhasil Di Ubah");
                window.history.back()</script>';
            }else{
                $message = '<script>alert("Password Gagal Di Ubah");
                window.history.back()</script>';
            }
            }else{
                $message = '<script>alert("Password Baru tidak sama");
                window.history.back()</script>';
        }
        
    }else{ 
        $message = '<script>alert("Password lama tidak sesuai");
        window.history.back()</script>';
    }
    }else{
        header('location:../home');
    }
echo $message;
