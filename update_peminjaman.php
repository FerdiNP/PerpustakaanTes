<?php
include 'koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$kategori = $_POST['kategori'];


mysqli_query($koneksi,"update buku set judul='$judul', pengarang='$pengarang', kategori='$kategori'where id='$id'");

header("location:buku.php");

 ?>