<?php 
session_start();
include '../config/conf.php';

$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];
$no_telp = $_POST['no_telp'];
$password = $_POST['password'];

$result = mysqli_query($conn,"SELECT nik FROM user WHERE nik = '$nik'");
if ( mysqli_fetch_assoc($result) ) {
    echo "<script>
    alert('NIK telah terdaftar') ;window.location='register.html';
    ;
    </script>";
    return false;
}

$mysqli = mysqli_query($conn,"INSERT INTO user (nik, nama_lengkap, no_telp, password) values
('$nik','$nama_lengkap','$no_telp','$password')");

if ($mysqli) {
    $_SESSION['regist']= true;
    echo"<script>alert('berhasil register') ;window.location='../login.php' </script>";
    
}else {
    echo"<script>alert('gagal register');window.location='signup.html';</script>";
}

?>