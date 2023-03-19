<?php 

session_start();
unset($_SESSION['gambar']);
include '../conf.php';

$id=$_POST['id_data'];
$ft=$_FILES['gambar']['name'];
$file=$_FILES['gambar']['tmp_name'];

$sql=mysqli_query($conn, "UPDATE data SET gambar ='$ft' WHERE id_data='$id'");
move_uploaded_file($file, "../directory".$ft);

if ($sql) {
    $_SESSION['gambar']=$ft;
    echo"<script>alert('Behasil mengubah gambar');window.location='../html/profile.php';</script>";
}else {
    echo"<script>alert('Gagal mengubah gambar');window.location='../html/profile.php';</script>";
}
?>