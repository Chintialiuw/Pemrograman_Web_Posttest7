<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Cup and Cakes</title>
        <link rel = "stylesheet" href = "style_login.css">
    </head>
    <body>
        <div class="container">
            <div class="login">
                <form action="" method = "post">
                    <h1>Login</h1>
                    <hr>
                    <br>
                    <p>
                        <a href = "login_admin.php">Saya Admin</a>
                    </p>
                    <label for="">USERNAME</label>
                    <input type="text" name="user" placeholder="username">
                    <label for="">PASSWORD</label>
                    <input type="password" name="password" placeholder="**********">

                    <button a class = "links" name = "login" href = "">Log In<br></button>
                   
                    <p>
                        <a href="#">Forgot Password ?</a>
                    </p>
                </form>
            </div>
        </div>

        <input type = "checkbox" onclick = "ubahMode()">

        <script src = "main.js"></script>
    </body>
</html>

<?php

    session_start();

    require 'config.php';

    if(isset($_POST['login']))
    {
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM akun WHERE username = '$user'";
        $result = $db->query($sql);

        //Cek akun ada apa engga
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            $username = $row['username'];

            //Cek Password ada apa engga
            if(password_verify($password, $row['psw']))
            {

                $_SESSION['login'] = $username;

                echo "
                    <script>
                        alert('Selamat Datang $username')
                        document.location.href = 'after_login.php';
                    </script>";
            }
            else
            {
                echo "
                    <script>
                        alert('Username dan Password Salah !')
                    </script>";
            }
        }
        else
        {
            echo "
                <script>
                    alert('Username Tidak Terdaftar, Silahkan Registrasi Ulang !')
                </script>";
        }
    }
?>