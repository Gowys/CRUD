<!DOCTYPE html>
<html>
<head>
	<title>CRUD Sederhana</title>
</head>
<body>
	<h1>Data Mahasiswa</h1>
	<a href="tambah.php">Tambah Data</a>
	<br><br>
	<table border="1">
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
		</tr>
		<?php 
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from mahasiswa");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nim']; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['alamat']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
						<a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
					</td>
				</tr>
				<?php 
			}
		?>
	</table>
</body>
</html>
