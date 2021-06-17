<!DOCTYPE html>
<html>
  <head>
    <title>CRUD</title>
  </head>
  <body>
    <center>
      <h2><font color="RED">DATA BUKU PERPUSTAKAAN</font></h2>
      <br>
      <h3>EDIT DATA BUKU</h3>

       <?php
      include 'koneksi.php';
      $id_buku = $_GET['id_buku'];
      $data = mysqli_query($koneksi,"select * from buku where id_buku='$id_buku'");
      while ($d = mysqli_fetch_array($data)) {
        ?>
      <form action="update-buku.php" method="post">
        <table>
          <tr>
            <td>Judul</td>
            <td>
             <input type="hidden" name="id_buku" value="<?php echo $d['id_buku']; ?>">
             <input type="text" name="judul" value="<?php echo $d['judul']; ?>">
            </td>
          </tr>
          <tr>
            <td>Pengarang</td>
            <td>
            <input type="text" name="pengarang" value="<?php echo $d['pengarang']; ?>">
            </td>
          </tr>
          <tr>
            <td>Kategori</td>
            <td>
            <input type="text" name="kategori" value="<?php echo $d['kategori']; ?>">
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
            <input type="submit" value="SIMPAN"><input type="submit" value="KEMBALI"><a href="buku.php"></a>
            </td>
          </tr>
        </table>
      </form>
      <?php
    }
       ?>
  </body>
</html>
