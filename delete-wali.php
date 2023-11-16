<?php
include 'koneksi.php';

//meyimpan data ke dalam variabel
$id_wali = $_GET['id_wali'];

//query SQL untuk insert data
$query = "DELETE from data_wali where id_wali='$id_wali'";
mysqli_query($koneksi,$query);

//mengalihkan ke halaman myindex.php
header("location:myindex.php");
?>