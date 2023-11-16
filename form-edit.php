<?php
include 'koneksi.php';
$id =$_GET['id_mhs'];
$mahasiswa = mysqli_query($koneksi,"select * from data_mahasiswa where id_mhs='$id'");
$row = mysqli_fetch_array($mahasiswa);

//membuat data jurusan menjadi dinamis dalam bentuk array
$jurusan = array('TEKNIK INFORMATIKA','TEKNIK ELEKTRO','REKAMEDIS');

//membuat function untuk set aktf radio button
function active_radio_button($value,$input){
    //apabila value dari radio sama dengan yang diinput
    $result = $value==$input?'checked':'';
    return $result;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Digital Talent</title>
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
        <h2>Edit Data</h2>
        <form method="post" action="update.php">
            <input type="hidden" value = "<?php echo $row['id_mhs'];?>" name="id_mhs">
            <table>
                <tr>
                    <td class="tanda">NIM</td> <td><input type="text" value="<?php echo $row['nim'];?>" name = "nim"></td>
                </tr>

                <tr>
                    <td class="tanda">NAMA</td> <td><input type="text" value="<?php echo $row['nama'];?>" name = "nama"></td>
                </tr>

                <tr>
                    <td class="tanda">JENIS KELAMIN</td> <td>
                        <input type = "radio" name = "jenis_kelamin" value = "L"<?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Laki laki
                        <input type = "radio" name = "jenis_kelamin" value = "P" <?php echo active_radio_button("P",$row['jenis_kelamin'])?>>Perempuan
                    </td>
                </tr>

                <tr>
                    <td class="tanda">JURUSAN <?php echo $row['jurusan'];?></td> <td>
                        <select name ="jurusan">
                            <?php
                            foreach($jurusan as $j){
                                echo "<option value = '$j'";
                                echo $row['jurusan']==$j?'selected = "selected"':'';
                                echo ">$j</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="tanda">ALAMAT</td> <td><input value="<?php echo $row ['alamat'];?>" type = "text" name = "alamat"></td>
                </tr>

                <tr>
                    <td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="myindex.php">KEMBALI</a>
                    </td>
                </tr>
            </table>
        </form>
        <footer>
            <p class="putih"> Copyright &copy; 2023 Faradilla Sari.</p>
        </footer>
    </body>
</html>