<?php

    date_default_timezone_set("Asia/Singapore");

    require 'config.php';

    // Menangkap id dari url yang dikirimkan
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    // Tampilkan value inputan dari id
    $result = mysqli_query($db, 
        "SELECT * FROM menu_cupcakes WHERE id='$id'");
    $row = mysqli_fetch_array($result);

    if(isset($_POST['kirim']))
    {
        $nama = $_POST['nama'];
        $topping = $_POST['topping'];
        $gula = $_POST['gula'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $produksi = date("d-m-y H:i:s a");

        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$nama.$ekstensi";

        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, "Menu/".$gambar_baru))
        {
            $query =    "UPDATE menu_cupcakes SET 
                            gambar='$gambar_baru',
                            nama='$nama',
                            topping='$topping',
                            gula='$gula', 
                            harga='$harga', 
                            stok='$stok',
                            produksi='$produksi'
                        WHERE id='$id'";
            $result = $db->query($query);
    
            if($result)
            {
                echo "
                    <script>
                        alert('Data Berhasil Diperbarui');
                        document.location.href = 'admin.php';
                    </script>
                ";
            }else
            {
                echo "
                    <script>
                        alert('Data Gagal Diinput');
                    </script>
                ";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUP AND CAKES</title>
    <link rel = "stylesheet" href = "style_register.css">
</head>
<body>
    <div class="container">
        <div class="register">
            <form action = "" method = "post" enctype = "multipart/form-data">
                <h1>Edit Menu</h1>
                <hr>
                <br>
                <label for = "">NAMA MENU</label>
                <input type = "text" name = "nama" value=<?=$row['nama']?>><br>
                <label for = "">TOPPING</label>
                <input type = "text" name = "topping" value=<?=$row['topping']?>><br>
                <label for = "">LEVEL GULA</label>
                <input type = "text" name = "gula" value=<?=$row['gula']?>><br>
                <label for = "">HARGA</label>
                <input type = "number" name = "harga" value=<?=$row['harga']?>><br>
                <label for = "">STOK</label>
                <input type = "number" name = "stok" value=<?=$row['stok']?>><br>
                <label for="">GAMBAR MENU</label>
                <input type="file" name = "gambar" value=<?=$row['gambar']?>><br><br>

                <br><input type="submit" name="kirim">
            </form>
        </div>
    </div>

    <input type = "checkbox" onclick = "ubahMode()">

    <script src = "main.js"></script>
</body>
</html>