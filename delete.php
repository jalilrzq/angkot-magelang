<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM rute_angkot WHERE ID_RUTE='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location: show-rute.php");
 
?>