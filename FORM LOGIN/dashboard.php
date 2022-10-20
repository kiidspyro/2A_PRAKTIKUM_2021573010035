<?php
session_start();
if(empty($_SESSION['username_xyz'])){
  header('location:dashboard.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>INI HALAMAN DASHBOARD</h2>
  <a href="logout.php">Logout</a>
</body>
</html>