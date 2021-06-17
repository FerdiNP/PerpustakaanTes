<?php

include 'koneksi.php';

$id_peminjaman = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM peminjaman WHERE id_peminjaman='$id_peminjaman'");

header("location:peminjaman.php");

?>
