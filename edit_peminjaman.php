<?php

include 'koneksi.php';

$id_peminjaman = $_GET['id'];

$query = mysqli_query($koneksi,"SELECT * FROM peminjaman WHERE id_peminjaman='$id_peminjaman'");

$d = mysqli_fetch_assoc($query);

	if(isset($_POST['submit'])){

	$id_siswa = $_POST['id_siswa'];
	$id_buku = $_POST['id_buku'];
	$tgl_pinjam = $_POST['tgl_pinjam'];

	$query = ("UPDATE peminjaman SET id_siswa='$id_siswa',id_buku='$id_buku',tgl_pinjam='$tgl_pinjam' WHERE id_peminjaman='$id_peminjaman'");

	$d = mysqli_query($koneksi,$query);

 	echo "<script>alert('Data berhasil diubah.');window.location='peminjaman.php';</script>";
// css adalh cascading style sheet
}

?>

<html>
<head>
	<title>Edit Data Peminjaman</title>
</head>
<body>
<center>
	<h2><font color="red">Data Peminjaman</font></h2>
	<h4>Edit Peminjaman</h4>
	<form action="" method="post">
		<table>
		<input type="hidden" name="id_peminjaman" value="<?php echo $d['id_peminjaman']; ?>">
			<tr>
				<td>Nama</td>
				<td><select name="id_siswa">
					<option>-0-Pilih-0-</option>
					<?php
					$query1=mysqli_query($koneksi, "SELECT * FROM siswa");
					while ($siswa = mysqli_fetch_assoc($query1)):
				 			?>
							<option value="<?php echo $siswa['id_siswa'] ; ?>"><?php echo $siswa["nama"]; ?>
							</option>
						<?php endwhile; ?>
				</select></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td><select name="id_buku">
					<option>-0-Pilih-0-</option>
					<?php
					$querry=mysqli_query($koneksi, "SELECT * FROM buku");
					while ($buku = mysqli_fetch_assoc($querry)):
				 			?>
							<option  value="<?php echo $buku['id_buku'] ; ?>"><?php echo $buku["judul"]; ?>
							</option>
						<?php endwhile; ?>
				</select></td>
			</tr>
			<tr>
				<td>tgl_pinjam</td>
				<td><input type="date" name="tgl_pinjam" value="<?php echo $tgl_pinjam=date('Y-m-d'); ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Simpan"></td>
			</tr>
		</table>
		</form>
</body>
</html>
