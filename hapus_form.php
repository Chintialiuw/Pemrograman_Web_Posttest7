<?php 

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $hapus_data = mysqli_query($db,
                  "SELECT * FROM menu_cupcakes WHERE id = '$id'");
    $row = mysqli_fetch_array($hapus_data);

    $gambar = $row['gambar'];
    $hapus = "Menu/$gambar";

    if(file_exists($hapus))
    {
        unlink($hapus);
    }

    $result = mysqli_query($db, 
        "DELETE FROM menu_cupcakes WHERE id='$id'");

    if($result){
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'tampil_form.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
            </script>
        ";
    }
}