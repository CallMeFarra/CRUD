<?php
include 'koneksi.php';

//menyimpan data ke dalam variabel
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];

//query SQL untuk insert data
$query = "INSERT INTO loginn SET username='$username',password='$password',status='$status'";
mysqli_query($koneksi,$query);

//mengalihkan ke halaman myindex.php
if ($username == 'Faradilla.01'&& $password == 'inifarraaa01'){
    header("location:myindex.php");
} else {
    echo ("MAAF USERNAME DAN PASSWORD SALAH! ANDA BUKAN ADMIN");
}

?>