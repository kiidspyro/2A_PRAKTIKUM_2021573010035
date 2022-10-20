<?php
$nim        = $_POST['NIM'];
$password   = $_POST['PASS'];
$nama       = $_POST['Nama'];
$kelas      = $_POST['Kelas'];
$alamat     = $_POST['Alamat'];
$ipk        = $_POST['IPK'];

if(empty ($nim) || empty ($password)){
  echo "username dan password tidak boleh kosong";

  }else{
    $conn = mysqli_connect("localhost","root","","dbsiswa2a");
    $query = mysqli_query($conn,"INSERT INTO tbmahasiswa (NIM,PASS,Nama,Kelas,Alamat,IPK) values ('$nim','
    $password','$nama','$kelas','$alamat','$ipk')");
    if($query){
      echo "Selamat anda berhasil mendaftar!";
      header("location:login.php");
    }else{
      echo"anda gagal login";
    }
  }
?>