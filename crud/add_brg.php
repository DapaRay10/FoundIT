<?php 
include '../config/conf.php';

$id_barang=$_POST['id_barang'];
$nama_brg=$_POST['nama_brg'];
$merk=$_POST['merk';]
$type_found = $_POST['type_found'];
$desk = $_POST['desk'];
$ft=$_FILES['gambar']['name'];
$file=$_FILES['gambar']['tmp_name'];

$mysqli = mysqli_query($conn,"INSERT INTO barang (id_barang, nama_brg, merk, type_found, desk, gambar) values
('$id_barang','$nama_brg','$merk','$type_found','$desk', '$ft')");
move_uploaded_file($file, "../directory/".$ft);

if ($mysqli) {
    echo"<script>alert('berhasil menambahkan');window.location='../html/form_hilang.php';</script>";
    
}
?>