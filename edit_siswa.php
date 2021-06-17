<!DOCTYPE html>
<html>
  <head>
    <title>CRUD</title>
  </head>
  <body>
    <center>
      <h2><font color="RED">DATA SISWA PERPUSTAKAAN</font></h2>
      <br>
      <h3>EDIT DATA SISWA</h3>

       <?php
      include 'koneksi.php';
      $id_siswa = $_GET['id_siswa'];
      $data = mysqli_query($koneksi,"select * from siswa where id_siswa='$id_siswa'");
      while ($d = mysqli_fetch_array($data)) {
        ?>
      <form action="update-siswa.php" method="post">
        <table>
          <tr>
            <td>Nama</td>
            <td>
             <input type="hidden" name="id_siswa" value="<?php echo $d['id_siswa']; ?>">
             <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
            </td>
          </tr>
          <tr>
            <td>NIS</td>
            <td>
            <input type="number" name="nis" value="<?php echo $d['nis']; ?>">
            </td>
          </tr>
          <tr>
            <td>Kelas</td>
            <td>
            <input type="text" name="kelas" value="<?php echo $d['kelas']; ?>">
            </td>
          </tr>
          <tr>
            <td>Jurusan</td>
            <td>
            <input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>">
            </td>
          </tr>

          <tr>
            <td>Email</td>
            <td>
            <input type="text" name="email" value="<?php echo $d['email']; ?>">
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
            <input type="submit" value="SIMPAN"><input type="submit" value="KEMBALI"><a href="siswa.php"></a>
            </td>
          </tr>
        </table>
      </form>
      <?php
    }
       ?>
  </body>
</html>
