<?php
session_start();
$email    = $_SESSION["email"];
$coon=mysqli_connect("localhost","id12470029_root","password","id12470029_adidas");
mysqli_query($coon, "SET NAMES utf8");

    $sql = "DELETE FROM taikhoan
    WHERE EMAIL = '$email'";
    $query =mysqli_query($coon,$sql);
    session_start();
    session_destroy();
    header("location:/");


