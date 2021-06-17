<!DOCTYPE html>
<html>
  <head>
    <title>CRUD</title>
    <link rel="stylesheet" href="styl.css">
  </head>
  <body>
    <ul>
   <li><a href="buku.php">Daftar Buku</a>
   <li><a href="siswa.php">Daftar Siswa</a>
   <li><a href="peminjaman.php">Daftar peminjam</a>
   <li><a href="tambah_siswa.php" class="tombol_data">TAMBAH DATA SISWA</a></li>
  </ul>
    <center>
      <h2><font>DATA SISWA PERPUSTAKAAN</font></h2>
      <table border="1" style="border-collapse: collapse;">
        <tr>
          <th>No</th>
          <th width="250x">Nama</th>
          <th width="100">NIS</th>
          <th>Kelas</th>
          <th width="100">Jurusan</th>
          <th width="250x">Email</th>
          <th>Opsi</th>
        </tr>
        <?php
         include 'koneksi.php';
         $no = 1;
         $data = mysqli_query($koneksi,"select * from siswa");
         while ($d = mysqli_fetch_array($data)) {
         ?>
         <tr>
           <td><?php echo $no++; ?></td>
           <td><?php echo $d['nama']; ?></td>
           <td><?php echo $d['nis']; ?></td>
           <td><?php echo $d['kelas']; ?></td>
           <td><?php echo $d['jurusan']; ?></td>
           <td><?php echo $d['email']; ?></td>
           <td>
          <a href="edit_siswa.php?id_siswa=<?php echo $d['id_siswa']; ?>" class="tombol_edit">EDIT</a>
          <a href="hapus_siswa.php?id_siswa=<?php echo $d['id_siswa']; ?>" class="tombol_hapus">HAPUS</a>
           </td>
         </tr>
         <?php
       }
          ?>
      </table>
  </body>
</html>
