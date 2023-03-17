<?php
$conn=mysqli_connect("localhost","root","","residence");

$a=$_POST['id'];
$b=$_POST['firstname'];
$c=$_POST['lastname'];
$d=$_POST['age'];
$e=$_POST['phonenumber'];
$f=$_POST['province'];
$g=$_POST['district'];
$h=$_POST['sector'];
$i=$_POST['cell'];
$j=$_POST['village'];

$sql="INSERT INTO residence VALUES ('$a','$b','$c','$d','$e','$f','$g,'$h','$i','$j')";
$p=mysqli_query($conn,$sql);
header("location:cand.php");
?>