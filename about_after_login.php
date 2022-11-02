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

<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Cup and Cakes</title>
        <link rel = "stylesheet" href = "style.css">
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script> 
    </head>
    <body>
        <section>
            <img src = "Gambar/beranda.png" alt = "">
            <div class = "wrapper">
                <div class = "nav">
                    <div class = "logo">
                        <a href = "#">
                            <p id = "nama_toko">
                                HALO PARA SWEETH TOOTH !
                                <script>
                                    document.getElementById("nama_toko").onclick = displaySapa;
                
                                    function displaySapa() {
                                    document.getElementById("nama_toko").innerHTML = "Selamat Datang !";
                                    }
                                </script>
                            </p>
                        </a>
                    </div>
                    <ul>
                        <li>
                            <a class="links" href = "after_login.php">HOME</a>
                        </li>
                        <li>
                            MENU
                        </li>
                        <li>
                            <a class="links" href = "about_after_login.php">ABOUT</a>
                        </li>
                        <li>
                            <a class="links" href = "index.php">LOG OUT</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-container">
                <p id = "tentang">
                    ABOUT
                    <script>
                        const about = document.getElementById('tentang');
                        about.addEventListener('mouseenter', function(){
                        tentang.style.color = 'pink';
                        });

                        about.addEventListener('mouseleave', function(){
                        tentang.style.color = 'white';
                        });
                    </script>
                </p>
                <p>
                    INTRODUCE OUR OWNER
                </p>
            </div>
        </section>

        <input type = "checkbox" onclick = "ubahMode()">
        
        <div class="perkenalan">
            <img width = "35%" src = "Gambar/foto diri.png" alt="">
            <div class="perkenalan-text ">
                <p id = nama>Chintia Liu Wintin, 2109106008
                    <script>
                        document.getElementById("nama").onclick = displayWarna;

                        function displayWarna() {
                        document.getElementById("nama").style.color = 'white';
                        }
                    </script>
                </p>
                <p>Seorang mahasiswi yang sedang menempuh pendidikan S1 Program Studi Informatika</p>
                <p>Angkatan 2021 di Universitas Mulawarman, Samarinda, Kalimantan Timur</p>
            </div>
        </div>
 
        <footer>
            <p>
                Interested to order ours cupcakes for your celebration ?
            </p>
            
            <p>
                We are waiting for your orders soon
            </p>
            <div class="social-icons">
                <a class = "links" href="https://wa.me/6281545962990"><i class="fab fa-whatsapp"></i></a>
                <a class = "links" href="https://github.com/Chintialiuw"><i class="fab fa-github"></i></a>
                <a class = "links" href="https://instagram.com/chintia.liu9"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="copyright">
                Copyright &copy; 2022 Designed by Chintia Liu Wintin
            </p>
        </footer>
        <script src = "main.js"></script>
    </body>
</html>