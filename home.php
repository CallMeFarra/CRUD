<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
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
        <h2>Silahkan Login</h2>
        <form method="post" action="login.php">
            <table>
                <tr>
                    <td class="tanda">Username</td> <td><input type="text" onkeyup="isi_otomatis()" name="username"></td> 
                </tr>

                <tr>
                    <td class="tanda">Password</td> <td><input type="text" name="password"></td> 
                </tr>
                <tr>
                    <td class="tanda">Status</td> 
                        <td>
                            <input type="radio" name="status" value="a">Admin
                        </td> 
                </tr>

                <tr>
                    <td colspan="2"><button type="submit" value="login">Login</button></td> 
                </tr>
            </table>
        </form>
        <footer>
            <p class="putih"> Copyright &copy; 2023 Faradilla Sari.</p>
        </footer>
    </body>
</html>