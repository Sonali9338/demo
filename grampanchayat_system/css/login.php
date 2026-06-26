<?php
include("db.php");

$e=$_POST['email'];
$p=$_POST['password'];

$res=mysqli_query($conn,"SELECT * FROM users WHERE email='$e' AND password='$p'");

if(mysqli_num_rows($res)>0){
    header("location:complaint.html");
}else{
    echo "<script>alert('Invalid Login'); window.location='login.html';</script>";
}
?>