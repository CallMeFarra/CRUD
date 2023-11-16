<?php
include 'koneksi.php';

//meyimpan data ke dalam variabel
$id_mhs = $_GET['id_mhs'];

//query SQL untuk insert data
$query = "DELETE from data_mahasiswa where id_mhs='$id_mhs'";
mysqli_query($koneksi,$query);

//mengalihkan ke halaman myindex.php
header("location:myindex.php");
?>