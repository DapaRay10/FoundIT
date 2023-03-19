<?php
include '../config/conf.php';
// menyimpan data id kedalam variabel
$id_user   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from found where id_user='$id_user'";
$sql=mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
if ($sql) {
    echo"<script>alert('berhasil menghapus data');window.location='../html/table.php';</script>";
    
}
?>