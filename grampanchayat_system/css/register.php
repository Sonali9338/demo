<?php
include("db.php");

$n=$_POST['name'];
$e=$_POST['email'];
$p=$_POST['password'];

mysqli_query($conn,"INSERT INTO users(name,email,password) VALUES('$n','$e','$p')");

echo "<script>alert('Registered Successfully'); window.location='login.html';</script>";
?>