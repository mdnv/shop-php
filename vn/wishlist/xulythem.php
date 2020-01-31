<?php
session_start();
$id=$_GET['slot'];
$email=$_SESSION["email"];
$coon=mysqli_connect("localhost","id12470029_root","password","id12470029_adidas");
mysqli_query($coon,"SET NAMES utf8");
$sql = "insert into giohang (idtrongbangsp,EMAIL) values ('$id','$email')";
$query =mysqli_query($coon,$sql);
if ($query == true) {
    header("location:index.php");
}
else{
    header("location:index.php");
}
?>
