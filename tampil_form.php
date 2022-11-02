<?php 
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM menu_cupcakes");
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
                <center><a class = "links" href="admin.php">Kembali ke Menu Utama</a></center>
            </p>
            <hr>
            <br>
            <table border='1'>
                <tr>
                <center>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Menu</th>
                    <th>Topping</th>
                    <th>Level Gula</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Produksi</th>
            
                    <th colspan ='2'>Action</th>
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
                    <td><center><?=$row['stok']?></center></td>
                    <td><center><?=$row['produksi']?></center></td>
                 
                    <td><center><a class = "links" a href="edit_form.php?id=<?=$row['id']?>">Edit</i></a></center></td>
                    <td><center><a class = "links" a href="hapus_form.php?id=<?=$row['id']?>">Hapus</a></center></td>
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