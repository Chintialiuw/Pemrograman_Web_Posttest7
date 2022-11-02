<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>CUP AND CAKES</title>
        <link rel = "stylesheet" href = "style_login.css">
    </head>
    <body>
        <div class="container">
            <div class="login">
                <form action="admin.php" method = "post">
                    <h1>Login Admin</h1>
                    <hr>
                    <br>
                    <label for="">USERNAME</label>
                    <input name = "username" type="text" placeholder="admin123">
                    <label for="">PASSWORD</label>
                    <input name = "password" type="password" placeholder="**********">

                    <button a class = "links" name = "login" href = "admin.php">Log In<br></button>

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