<!DOCTYPE html>
<html>
  <head>
      <title>CRUD</title>
    </head>
    <body>
      <center>
        <h2><font color="RED">DATA BUKU PERPUSTAKAAN</font></h2>
        <br>
        <h3>TAMBAH DATA BUKU</h3>
        <form action="tambah-proses-buku.php" method="post">
          <table>
            <tr>
              <td>Judul</td>
              <td><input type="text" name="judul"></td>
            </tr>
            <tr>
              <td>Pengarang</td>
              <td><input type="text" name="pengarang"></td>
            </tr>
            <tr>
              <td>Kategori</td>
              <td><input type="text" name="kategori"></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" value="SIMPAN"></td>
            </tr>
          </table>
        </form>
  </body>
</html>
