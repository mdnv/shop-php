<?php
$id = $_GET['slot'];
$coon=mysqli_connect("localhost","id12470029_root","password","id12470029_adidas");
mysqli_query($coon,"SET NAMES utf8");
$sql = "DELETE FROM giohang WHERE idtrongbangsp='$id'";
$query =mysqli_query($coon,$sql);
if ($query == true) {
header("location:index.php");
}
else{
header("location:index.php");
}
?>
