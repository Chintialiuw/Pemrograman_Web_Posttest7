<?php
    session_start();
    if(!isset($_SESSION['login']))
    {
        echo"
            <script>
                alert('Akses Ditolak, Silahkan Log In Terlebih Dahulu');
                document.location.href = 'login.php';
            </script>";
    }
    else
    {
        $username = $_SESSION['login'];
    }
?>

<?php 
    require('config.php');

    if(isset($_GET['search']))
    {
        $keyword = $_GET['keyword'];
        $result = mysqli_query($db, "SELECT * FROM menu_cupcakes WHERE nama LIKE '%$keyword%' OR gula LIKE '%$keyword%'");
    }
    else
    {
        $result = mysqli_query($db, "SELECT * FROM menu_cupcakes");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUP AND CAKES</title>
    <link rel = "stylesheet" href = "style_form_tampil.css">
</head>
<body>
    <div class="container">
        <div class="tampil">
            <h1>MENU CUPCAKES</h1>
            <p>
                <center><a class = "links" href="after_login.php">Kembali ke Menu Utama</a></center>
            </p>
            <hr>
            <br>
            <table border='1' align = "center">
                <form action = "" method = "GET">
                    <center>
                        <input type="text" name = "keyword" placeholder = "cari menu...">
                        <button a class = "" name = "search" href = "">Cari<br></button>
                    </center>
                </form>
                <tr>
                <center>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Menu</th>
                    <th>Topping</th>
                    <th>Level Gula</th>
                    <th>Harga</th>
                    <th>Produksi</th>
                </center>
                </tr>
                <?php           
                    $i = 1;
                    while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><center><?=$i; ?></center></td>
                    <td><center><img src="Menu/<?=$row['gambar']?>" alt="" width = "100px"></center></td>
                    <td><center><?=$row['nama']?></center></td>
                    <td><center><?=$row['topping']?></center></td>
                    <td><center><?=$row['gula']?></center></td>
                    <td><center><?=$row['harga']?></center></td>
                    <td><center><?=$row['produksi']?></center></td>
                </tr> 
                <?php 
                $i++;
                    }
                ?>
            </table>
        </div>
    </div>
    <input type = "checkbox" onclick = "ubahMode()">

    <script src = "main.js"></script>
</body>
</html>
