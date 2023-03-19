<?php 
include '../config/conf.php';

$id_user=$_POST['id_user'];
$type_found = $_POST['type_found'];
$desk = $_POST['desk'];
$ft=$_FILES['gambar']['name'];
$file=$_FILES['gambar']['tmp_name'];

$mysqli = mysqli_query($conn,"INSERT INTO found (id_user, type_found, desk, gambar) values
('$id_user','$type_found','$desk', '$ft')");
move_uploaded_file($file, "../directory/".$ft);

if ($mysqli) {
    echo"<script>alert('berhasil menambahkan');window.location='../html/table.php';</script>";
    
}
?>