<!DOCTYPE html>
<html>
  <head>
      <title>CRUD</title>
    </head>
    <body>
      <center>
        <h2><font color="RED">DATA SISWA PERPUSTAKAAN</font></h2>
        <br>
        <h3>TAMBAH DATA SISWA</h3>
        <form action="tambah-proses-siswa.php" method="post">
          <table>
            <tr>
              <td>Nama</td>
              <td><input type="text" name="nama"></td>
            </tr>
            <tr>
              <td>NIS</td>
              <td><input type="text" name="nis"></td>
            </tr>
            <tr>
              <td>Kelas</td>
              <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
              <td>Jurusan</td>
              <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><input type="text" name="email"></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" value="SIMPAN"></td>
            </tr>
          </table>
        </form>
  </body>
</html>
