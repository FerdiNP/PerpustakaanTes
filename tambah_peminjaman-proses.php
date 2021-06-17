<?php
include 'koneksi.php';

$id_siswa = $_POST['id_siswa'];
$id_buku = $_POST['id_buku'];

mysqli_query($koneksi,"INSERT into peminjaman values('','$id_siswa','$id_buku')");

header("location:peminjaman.php");

 ?>
