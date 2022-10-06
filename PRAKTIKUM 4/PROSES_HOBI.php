<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>
<?php
//var_dump($_GET);
//print_r($_GET);
echo $_REQUEST['nama']."<br>";
echo $_GET["nomor_hp"]."<br>";

if(isset($_GET["HOBI1"])){
    echo "Makan";
}
if(isset($_GET["HOBI2"])){
    echo "Minum";
}
if(isset($_GET["HOBI3"])){
    echo "Mengaji";
}
?>
</body>
</html>
  
</body>
</html>