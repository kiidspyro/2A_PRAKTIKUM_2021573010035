<html>
    <head>
        <title>Koneksi Database MySQL</title>
    </head>
    <body>
        <h1>Koneksi database dengan mysqli_fetch_array</h1>
        <?php
            $conn = mysqli_connect("localhost","root","","dbsiswa2A")
            or die("koneksi gagal");
            $hasil = mysqli_query($conn,"select * from liga");
            while($row = mysqli_fetch_array($hasil)){
                echo "liga ".$row["negara"];
                echo " mempunyai ".$row[2];
                echo " wakil di liga champion <br>";
            }
        ?>
    </body>
</html>