<?php 
include 'koneksi.php'; 

// menyimpan data kedalam variabel
$id_wali= $_POST['id_wali']; 
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat']; 

// query SQL untuk insert data 
$query="UPDATE data_wali SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE id_wali=$id_wali";
mysqli_query($koneksi, $query); 

// mengalihkan ke halaman index.php
header("location:myindex.php");
?>