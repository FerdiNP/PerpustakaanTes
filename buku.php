<!DOCTYPE html>
<html>
  <head>
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <ul>
   <li><a href="buku.php">Daftar Buku</a>
   <li><a href="siswa.php">Daftar Siswa</a>
   <li><a href="peminjaman.php">Daftar peminjam</a>
   <li><a href="tambah_buku.php" class="tombol_data">TAMBAH DATA BUKU</a></li>
  </ul>
    <center>
      <h2><font color="RED">DATA BUKU PERPUSTAKAAN</font></h2>
      <table border="1" style="border-collapse: collapse;">
        <tr>
          <th>No</th>
          <th width="250x">Judul</th>
          <th width="250x">Pengarang</th>
          <th width="250x">Kategori</th>
          <th width="250x">Opsi</th>
        </tr>
        <?php
         include 'koneksi.php';
         $no = 1;
         $data = mysqli_query($koneksi,"select * from buku");
         while ($d = mysqli_fetch_array($data)) {
         ?>
         <tr>
           <td align="center"><?php echo $no++; ?></td>
           <td align="center"><?php echo $d['judul']; ?></td>
           <td align="center"><?php echo $d['pengarang']; ?></td>
           <td align="center"><?php echo $d['kategori']; ?></td>
           <td align="center">
          <a href="edit_buku.php?id_buku=<?php echo $d['id_buku']; ?>"class="tombol_edit">EDIT</a>
          <a href="hapus_buku.php?id_buku=<?php echo $d['id_buku']; ?>" class="tombol_hapus">HAPUS</a>
           </td>
         </tr>
         <?php
       }
          ?>
      </table>
  </body>
</html>
