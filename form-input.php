<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Form Inputan Data</title>
        <style type="text/css">
            body{
                font-family: Arial, Helvetica, sans-serif;
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

            .header{
                text-align: center;
                color: white;
                padding: 14px 16px;
            }

            .background{
                background-color: #818FB4;
            }
            .tanda { background-color: #cfcfcf;}
            .table {
                width: 100%;
                border: 1px solid black;
                margin-top: 10px;
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
        <h2>Data Mahasiswa</h2>
        <form method="post" action="simpan.php">
            <table>
                <tr>
                    <td class="tanda">NIM</td> <td><input type="text" onkeyup="isi_otomatis()" name="nim"></td> 
                </tr>

                <tr>
                    <td class="tanda">NAMA</td> <td><input type="text" name="nama"></td> 
                </tr>

                <tr>
                    <td class="tanda">JENIS KELAMIN</td> 
                        <td>
                            <input type="radio" name="jenis_kelamin" value="L">Laki laki
                            <input type="radio" name="jenis_kelamin" value="P">Perempuan
                        </td> 
                </tr>

                <tr>
                    <td class="tanda">JURUSAN</td> 
                        <td>
                            <select name="jurusan">
                                <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                                <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                                <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                                <option value="KEDOKTERAN">KEDOKTERAN</option>
                            </select>
                        </td> 
                </tr>

                <tr>
                    <td class="tanda">ALAMAT</td> <td><input type="text" name="alamat"></td> 
                </tr>

                <tr>
                    <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td> 
                </tr>
            </table>
        </form>
        <footer>
            <p class="putih"> Copyright &copy; 2023 Faradilla Sari.</p>
        </footer>
    </body>
</html>