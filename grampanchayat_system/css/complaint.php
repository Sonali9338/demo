<?php
include("db.php");

$n=$_POST['name'];
$m=$_POST['mobile'];
$a=$_POST['address'];

$t=$_POST['title'];
$c=$_POST['category'];
$d=$_POST['desc'];
$l=$_POST['location'];

$date=$_POST['date'];
$time=$_POST['time'];

$img=$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],"uploads/".$img);

mysqli_query($conn,"INSERT INTO complaints(name,mobile,address,title,category,description,location,date,time,image,status)
VALUES('$n','$m','$a','$t','$c','$d','$l','$date','$time','$img','Pending')");

echo "<script>alert('Complaint Submitted'); window.location='track.php';</script>";
?>