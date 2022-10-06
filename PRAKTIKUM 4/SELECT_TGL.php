<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form action="PROSES_TGL.php" method="POST">
    <label for="Tanggal :"></label>
    <select name="tanggal">

  <?php
  for($i=1;$i<32;$i++){
    echo "<option value='$i'>$i </option>";
  }
  
  ?>
    <select name="tanggal">
      <option value="1">01</option>
      <option value="2">02</option>
      <option value="3">03</option>
      <option value="4">04</option>
      <option value="5">05</option>
      
</select>
<input type="submit" value="KIRIM">
</body>
</html>