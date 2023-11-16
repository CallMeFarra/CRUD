<?php
include 'koneksi.php';

//menyimpan data ke dalam variabel
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$data_wali = mysqli_query($koneksi,"select * from data_wali where id_wali='$id_wali'");
$row = mysqli_fetch_array($data_wali);
//query SQL untuk insert data
$query = "INSERT INTO data_wali SET nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat'";
mysqli_query($koneksi,$query);

//mengalihkan ke halaman myindex.php
header("location:ucapanwali.php");
?>