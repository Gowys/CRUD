<!DOCTYPE html>
<html>
<head>
	<title>CRUD Sederhana</title>
</head>
<body>
	<h1>Edit Data Mahasiswa</h1>
	<?php 
		include 'koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
		$d = mysqli_fetch_array($data);
	?>
	<form method="post" action="aksi_edit.php">
		<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
		<label>NIM:</label>
		<input type="text" name="nim" value="<?php echo $d['nim']; ?>">
		<br>
		<label>Nama:</label>
		<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
		<br>
		<label>Alamat:</label>
		<input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
		<br>
		<input type="submit" value="Simpan">
	</form>
</
