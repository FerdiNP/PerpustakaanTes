<?php
include 'koneksi.php';

$id_siswa = $_POST['id_siswa'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];

mysqli_query($koneksi,"update siswa set nama='$nama', nis='$nis', kelas='$kelas',jurusan='$jurusan',email='$email' where id_siswa='$id_siswa'");

header("location:siswa.php");

 ?>
