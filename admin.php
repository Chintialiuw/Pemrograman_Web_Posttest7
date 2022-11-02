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
                                HALO ADMIN !
                            </p>
                        </a>
                    </div>
                    <ul>
                        <li>
                            <a class="links" href = "admin.php">HOME</a>
                        </li>
                        <li>
                            <a class="links" href = "form_admin.php">FORMS</a>
                        </li>
                        <li>
                            <a class="links" href = "tampil_form.php">MENU</a>
                        </li>
                        <li>
                            <a class="links" href = "index.php">LOG OUT</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-container">
                <p id = "quotes">
                    YOU WILL BE DELIGHTED WITH OUR SWEETS !
                </p>
                <p>
                    THERE IS SOMETHING FOR EVERYONE TO TASTE
                </p>
                <button class = "signature">Check This Out</button>
            </div>
        </section>
        
        <input type = "checkbox" onclick = "ubahMode()">
        
        <div class="menu">
            <div class="menu-text ">
                <p>
                    Menu
                </p>
            </div>
            <div class="box-container">

                <div class="box-1">
                    <span></span>
                    <p class="heading">Monster Cupcakes</p>
                    <p class="details">Chocolate Cakes dengan butter cream Blueberry dan Cookies Kopi yang renyah</p>
                    <button>Details</button>
                </div>

                <div class="box-2">
                    <span></span>
                    <p class="heading">Chocolate Cupcakes</p>
                    <p class="details">Chocolate Cakes dengan tambahan butter cream Chocolate dan taburan Ceres di atasnya</p>
                    <button>Details</button>
                </div>

                <div class="box-3">
                    <span></span>
                    <p class="heading">Triple Berry Cupcakes</p>
                    <p class="details">Vanila Cakes dengan butter Cream Strawberry yang dipadukan dengan 3 jenis buah berry</p>
                    <button>Details</button>
                </div>
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