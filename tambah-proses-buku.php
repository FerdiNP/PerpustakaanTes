<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$kategori = $_POST['kategori'];

mysqli_query($koneksi,"insert into buku values('','$judul','$pengarang','$kategori')");

header("location:buku.php");

 ?>
