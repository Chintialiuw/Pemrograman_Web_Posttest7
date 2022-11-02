<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Cup and Cakes</title>
        <link rel = "stylesheet" href = "style_register.css">
    </head>

    <body>
        <div class="container">
            <div class="register">
                <form action = "" method = "post">
                    <h1>Register</h1>
                    <hr>
                    <br>
                    <label for = "">EMAIL</label>
                    <input type = "email" name = "email" required placeholder="example@gmail.com"><br>
                    <label for = "">USERNAME</label>
                    <input type = "text" name = "username" autocomplete = "off" placeholder="username"><br>
                    <label for = "">NAMA LENGKAP</label>
                    <input type = "text" name = "nama_lengkap" autocomplete = "off" placeholder="nama depan"><br>
                    <label for = "">TANGGAL LAHIR</label>
                    <input type = "date" name = "tgl_lahir"><br>
                    <label for = "">NOMOR TELEPON</label>
                    <input type = "number" name = "telepon" placeholder="08**********"><br>
                    <label for = "">PASSWORD</label>
                    <input type = "password" name = "password" required placeholder="**********"><br>
                    <label for = "">KONFIRMASI PASSWORD</label>
                    <input type = "password" name = "konfirmasi" required placeholder = "konfirmasi password"><br>


                    <input type = "submit" name = "register"><br>
                    
                    <p>
                        <a href="login.php">Sudah Mempunyai Akun ?</a>
                    </p>
                </form>
            </div>
        </div>

        <input type = "checkbox" onclick = "ubahMode()">

        <script src = "main.js"></script>
    </body>
</html>

<?php

    require 'config.php';

    if(isset($_POST['register']))
    {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $telepon = $_POST['telepon'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        // Cek Username sudah digunakan atau belum
        $sql = "SELECT * FROM akun WHERE username = '$username'";
        $user = $db->query($sql);

        if(mysqli_num_rows($user) > 0)
        {
            echo "
                <script>
                    alert('Username telah digunakan, Silahkan gunakan username lain);
                </script>";
        }
        else 
        {
            // Cek Konfirmasi Password
            if($password == $konfirmasi)
            {
                $password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO akun (email, username, nama_lengkap, tgl_lahir, telepon, psw)
                          VALUES  ('$email', '$username', '$nama_lengkap', '$tgl_lahir', '$telepon', '$password')";
                $result = $db->query($query);

                if($result)
                {
                    echo "<script>
                            alert('Registrasi Berhasil');
                            document.location.href = 'login.php';
                        </script>";
                }
                else
                {
                    echo "<script>
                            alert('Registrasi Gagal');
                        </script>";
                }
            }
            else
            {
                echo "<script>
                        alert('Konfirmasi Password Salah !');
                    </script>";
            }
        }
    }
?>