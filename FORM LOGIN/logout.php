<?php
session_start();
session_destroy();
header("location:form login.php");
echo "<script>alert('Bye-Bye !')</script>";
?>