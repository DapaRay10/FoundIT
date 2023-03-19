<?php 

include '../config/conf.php';

$id_user=$_POST['id_user'];
$type_found = $_POST['type_found'];
$desk = $_POST['desk'];

echo $id_user;

$sql=mysqli_query($conn, "UPDATE found SET type_found = '$type_found', desk = '$desk'  WHERE id_user='$id_user'");


if ($sql) {
    echo"<script>alert('berhasil menambahkan');window.location='../html/table.php';</script>";
    
}
?>