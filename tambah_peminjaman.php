<?php

include 'koneksi.php';

	$query = mysqli_query($koneksi,"SELECT * FROM siswa");

	$querry = mysqli_query($koneksi,"SELECT * FROM buku");

if(isset($_POST["submit"])){

	$id_siswa = $_POST['id_siswa'];
	$id_buku = $_POST['id_buku'];
	$tgl_pinjam = $_POST['tgl_pinjam'];

	$d = mysqli_query($koneksi,"INSERT INTO peminjaman VALUES('','$id_siswa','$id_buku','$tgl_pinjam','')");

	if($d){
	echo "<script>alert('Data berhasil ditambahkan.');window.location='peminjaman.php';</script>";
}
}


?>

<html>
<head>
	<title>Tambah Data Peminjaman</title>
</head>
<body>
<center>
	<h2><font color="red">Data Peminjaman</font></h2>
	<h4>Tambah Peminjaman</h4>
	<form action="" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td><select name="id_siswa">
					<option>-0-Pilih-0-</option>
					<?php while ($siswa = mysqli_fetch_assoc($query)):
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
					<?php while ($buku = mysqli_fetch_assoc($querry)):
				 			?>
							<option  value="<?php echo $buku['id_buku'] ; ?>"><?php echo $buku["judul"]; ?>
							</option>
						<?php endwhile; ?>
				</select></td>
			</tr>
			<tr>
				<td>Tgl_pinjam</td>
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
