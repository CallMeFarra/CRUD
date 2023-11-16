<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Digital Talent</title>
        <style type="text/css">
            body{
                font-family: Arial, Helvetica, sans-serif;
                overflow-y: scroll;
            }

            nav {
                background-color: #435585;
                overflow: hidden;
            }

            nav a {
                float: left;
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            nav a:hover {
                background-color: #ddd;
                color: black;
            }

            footer {
                background-color: #435585;
                position: absolute;
                bottom: 0;
                width: 99%;
                text-align: center;
                color: white;
            }
            .tanda { background-color: #cfcfcf;}

            .header{
                text-align: center;
                color: white;
                padding: 14px 16px;
            }

            .background{
                background-color: #818FB4;
            }
            .table {
                width: 100%;
                border: 1px solid black;
                margin-top: 10px;
            }
            .content {
                height: 110vh; /* Tinggi konten lebih dari tinggi halaman untuk menunjukkan efek scroll */
                padding: 20px;
            }
            footer {
                background-color: #435585;
                position: relative; /* Mengubah posisi menjadi relative */
                bottom: 0;
                width: 99.9%;
                text-align: center;
                color: white;
                height: 50px;
                line-height: 50px;
            }
        </style>
    </head>
    <body>
        <nav>
            <h2 class="header">Sistem Informasi Mahasiswa</h2>
            <nav class="background">
                <a href="wali.php">Home</a>
                <a href="form-input.php">Mahasiswa</a>
                <a href="home.php">Admin</a>
            </nav>
        </nav>
        <h2>List Mahasiswa</h2>
        <div class="content">
        <table border = "1" class="table">
            <tr class="tanda">
                <th>NO</th> <th>NIM</th> <th>NAMA</th> <th>JENIS KELAMIN</th> <th>JURUSAN</th>
            </tr>

            <?php
            // include 'koneksi.php';
            include 'koneksi.php';
            // $mahasiswa = mysqli_query($koneksi, "SELECT * from data_mahasiswa");
            $mahasiswa = mysqli_query($koneksi, "SELECT * from data_mahasiswa");
            $no = 1;

            foreach ($mahasiswa as $row){
                $jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki laki';
                echo "<tr>
                        <td>$no</td>
                        <td>".$row['nim']."</td>
                        <td>".$row['nama']."</td>
                        <td>".$jenis_kelamin."</td>
                        <td>".$row['jurusan']."</td>
                    </tr>";
                $no++;
            }
            ?>
        </table>
        </div>
        <p></p>
        <button>
            <a href="form-input.php">Masukkan data lainnya</a>
        </button>
        <footer>
            <p class="putih"> Copyright &copy; 2023 Faradilla Sari.</p>
        </footer>
    </body>