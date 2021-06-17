<?php
include 'koneksi.php';

$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$kategori = $_POST['kategori'];

mysqli_query($koneksi,"update buku set judul='$judul', pengarang='$pengarang', kategori='$kategori' where id_buku='$id_buku'");

  header("location:buku.php");

 ?>
