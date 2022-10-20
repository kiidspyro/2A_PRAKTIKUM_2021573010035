  <?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    
  // if(empty ($username) || empty ($password)){
  // echo "Silakan lengkapi semua kolom !";
  //}
  //else if($username == "admin" && $password == "666"){
  //echo "Anda berhasil login !";
  //}
  //else{
  //echo "Oops! Username atau password tidak sesuai";
  //}

if(empty ($username) || empty ($password)){
echo "<script>alert('Silakan lengkapi semua kolom !'); 
window.history.back();
</script>";
}

else{

  $conn = mysqli_connect("localhost","root","","dbsiswa2a");
  $query = mysqli_query($conn,"SELECT * FROM tbmahasiswa WHERE NIM='$username' && PASS='$password'");
  $data = mysqli_fetch_array($query);

if ($data){
  //echo "Anda Berhasil Login !";
  $_SESSION ['username_xyz']=$username;
  header('location:dashboard.php');
}else{
  echo "<script>alert('Oops! Username atau password tidak sesuai');
  window.history.back();
  </script>";
}
    
  }
  ?>