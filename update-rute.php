<?php
include 'koneksi.php';

// Data dari form update
$id = $_POST['id_rute'];
$nama = $_POST['nama_rute'];
$keterangan = $_POST['keterangan'];

// Update ke database
mysqli_query($koneksi, "UPDATE rute_angkot SET NAMA_RUTE='$nama', KETERANGAN='$keterangan' WHERE ID_RUTE='$id'");

// Balik ke halaman show-rute
header("location: show-rute.php");

?>