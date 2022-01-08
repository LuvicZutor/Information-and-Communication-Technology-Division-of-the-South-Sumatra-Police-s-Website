<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/logotik.png">
    <title>Layanan | TIK Polda Sumsel</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/all.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="css/cssPages.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <a href="index.html" class="navbar-brand">
            <img src="assets/logotik.png" alt="" srcset="">
        </a>
        <a href="#" class="brand">BID TIK SUMSEL</a>
        <ul>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="profil.html">Profil</a></li>
            <li onclick="myFunction()" class="dropbtn"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop">Layanan</a>
                <div id="myDropdown" class="dropdown-menu">
                    <a href="ht.php" class="dropdown-item">Handie Talkie (HT)</a>
                    <a href="vicon.php" class="dropdown-item">Video Conference </a>
                    <a href="sound.php" class="dropdown-item">Sound System</a>
                    <a href="#" class="dropdown-item">Lain-lain</a>
                </div>
            </li>
            <li><a href="beritaterkini.html">Kegiatan Bid TIK</a></li>
            <li><a href="kontakus.html">Kontak Kami</a></li>
        </ul>
    </nav>

    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Layanan</a></li>
                        <li class="breadcrumb-item"><a href="#">Handie Talkie (HT)</a></li>
                    </ol>
                </div>

                <div class="container1">
                    <br><br>
                    <div class="main">
                        <form action="save_ht.php" method="post" id="form">
                            <h2>FORMULIR PENGADUAN</h2>
                            <hr />

                            <label>NIP / NRP :</label>
                            <input type="text" name="nrp_nip" id="nrp_nip" />

                            <label>NAMA :</label>
                            <input type="text" name="nama" id="nama" />

                            <label>SATUAN KERJA :</label>
                            <input type="text" name="satker" id="satker" />

                            <label>PERIHAL :</label>
                            <input type="text" name="perihal" id="perihal" />

                            <!-- <label>Tanggal :</label>
                        <input type="text" name="tanggal" id="tahggal" /> -->

                            <!-- <label>Pilih Metode :</label>
                        <span><input type="radio" name="method" value="get" checked> GET &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="method" value="post" > POST </span>	 -->

                            <input type="submit" name="submit" id="submit" value="KIRIM">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <br><br>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Kontak Kami</h4>
                    <ul>
                        <li><a href="#">Jl. Jend. Sudirman No.KM.4,5, Pahlawan, Kec. Kemuning, Kota Palembang, Sumatera Selatan 30151</a></li>
                        <li><a href="#">(0711) 314678</a></li>
                        <li><a href="#">bidtiksumsel@gmail.com</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Profil</h4>
                    <ul>
                        <li><a href="#">Polda Sumsel</a></li>
                        <li><a href="#">Bid TIK Sumsel</a></li>
                        <li><a href="#">Struktur Organisasi Bid TIK Sumsel</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Layanan</h4>
                    <ul>
                        <li><a href="#">Handie Talkie</a></li>
                        <li><a href="#">Video Conference</a></li>
                        <li><a href="#">Sound System</a></li>
                        <li><a href="#">Lain-lain</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Ikuti Kami</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/Bidhumaspoldasumsel"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com/channel/UC0sOfFYq79gT2yl_jEt9WZg"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/polisi_sumsel/"><i class="fab fa-instagram"></i></a>
                        <a href="tel:(0711)314678"><i class="fas fa-fax"></i></a>
                    </div>
                    <div class="col">
                        <img src="assets/presisi2.png" class="img-fluid" alt="" style="margin-bottom: 10px; margin-left:-25px ;">
                    </div>
                    <p class="copyright">Copyright © 2021 BID TIK Polda Sumsel. All Right Reserved.</p>
                </div>

            </div>
        </div>
    </footer>

    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-menu");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

        window.onscroll = () => {
            var nav = document.querySelector('nav');

            if (window.pageYOffset > 0) {
                nav.classList.add("sticky")
            } else {
                nav.classList.remove("sticky");
            }
        }
    </script>

    <script src="js/all.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>