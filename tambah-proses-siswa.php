<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];

mysqli_query($koneksi,"insert into siswa values('','$nama','$nis','$kelas','$jurusan','$email')");

header("location:siswa.php");

 ?>
