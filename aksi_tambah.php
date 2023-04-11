<?php 
	include 'koneksi.php';
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	mysqli_query($koneksi,"insert into mahasiswa values('','$nim','$nama','$alamat')");
	header("location:index.php");
?>
