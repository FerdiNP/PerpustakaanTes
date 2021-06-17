<?php

$koneksi = mysqli_connect("localhost","root","","perpustakaan");


if (mysqli_connect_error()) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
}

 ?>
