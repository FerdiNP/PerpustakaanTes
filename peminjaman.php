<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<ul>
	<li><a href="buku.php">Daftar Buku</a>
	<li><a href="siswa.php">Daftar Siswa</a>
	<li><a href="peminjaman.php">Daftar peminjam</a>
	<li><a href="tambah_peminjaman.php" class="tombol_data">TAMBAH DATA PEMINJAMAN</a>
	</ul>
	<center>
		<h2>DATA PEMINJAMAN PERPUSTAKAAN</h2>
		<table border="1" style="border-collapse: collapse;">
			<tr>
            <th>No.</th>
            <th width="100x">Id Siswa</th>
            <th width="100x">Id Buku</th>
            <th width="250x">Tanggal Pinjam</th>
            <th width="250x">Tanggal Kembali</th>
            <th width="250x">Aksi</th>
        </tr>
				<?php
				include 'koneksi.php';
				$i = 1;
				$data = mysqli_query($koneksi,"SELECT * FROM peminjaman");
				while ($d = mysqli_fetch_assoc($data)) {
					?>
        <tr>
					<td align="center"><?php echo $i++; ?></td>
					<td align="center"><?php echo $d['id_siswa']; ?></td>
					<td align="center"><?php echo $d['id_buku']; ?></td>
					<td align="center"><?php echo $tgl_pinjam=$d['tgl_pinjam']; ?></td>
					<td align="center"><?php $tgl_kembali=$d['tgl_kembali']; echo date('Y-m-d', strtotime("+3 day", strtotime($tgl_pinjam))); ?></td>
					<td align="center">
					<a href="edit_peminjaman.php?id=<?php echo $d['id_peminjaman']; ?>" class="tombol_edit">Edit</a>
					<a href="hapus_peminjaman.php?id=<?php echo $d['id_peminjaman']; ?>" class="tombol_hapus">Hapus</a></td>
				</tr>
        <?php
    }
    ?>
		</table>
	</center>

</body>
</html>
