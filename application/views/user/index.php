<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('web/'); ?>assets/logotik.png">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('web/'); ?>bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('web/'); ?>bootstrap/all.css">
    <link rel="stylesheet" href="<?= base_url('web/'); ?>style/style.css">
    <link rel="stylesheet" href="<?= base_url('web/'); ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('web/'); ?>css/style2.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->
    <nav>
        <a href="<?= base_url('user'); ?>" class="navbar-brand">
            <img src="<?= base_url('web/'); ?>assets/logotik.png" alt="" srcset="">
        </a>
        <a href="#" class="brand">BID TIK SUMSEL</a>
        <ul>
            <li><a href="<?= base_url('user'); ?>">Beranda</a></li>
            <li><a href="<?= base_url('user/profil'); ?>">Profil</a></li>
            <li onclick="myFunction()" class="dropbtn"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop">Layanan</a>
                <div id="myDropdown" class="dropdown-menu">
                    <a href="<?= base_url('user/ht'); ?>" class="dropdown-item">Handie Talkie (HT)</a>
                    <a href="<?= base_url('user/vicon'); ?>" class="dropdown-item">Video Conference </a>
                    <a href="<?= base_url('user/sound'); ?>" class="dropdown-item">Sound System</a>
                    <a href="<?= base_url('user/dll'); ?>" class="dropdown-item">Lain-lain</a>
                </div>
            </li>
            <li><a href="<?= base_url('user/kegiatan'); ?>">Kegiatan Bid TIK</a></li>
            <li><a href="<?= base_url('user/kontakus'); ?>">Kontak Kami</a></li>
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="img-profile rounded-circle" src="<?= base_url('assets/'); ?>undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <div class="banner1234">
        <img src="<?= base_url('web/'); ?>assets/poldasumsel2.jpg" class="d-block w-100 img-fluid">
        <div class="contents scale-in-hor-left hvr-underline-from-left">
            <h1 style="text-align: center;">Welcome To Website</h1>
            <h4>
                <b>
                    <marquee direction="right">BID &nbsp;TIK&nbsp; POLDA&nbsp; SUMSEL&nbsp; 2021</marquee>
                </b>
            </h4>
        </div>
    </div>


    <!-- Brand -->
    <section class="logo-brand" data-aos="fade-up">
        <div class="container">
            <div class="row p-4">
                <div class="col logotik">
                    <img src="<?= base_url('web/'); ?>assets/logotik.gif" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <br><br>
                    <h2 style="color: #ED1C23;">BIDANG TIK</h2>
                    <h1 style="color: #ED1C23;">POLDA</h1>
                    <h1 style="color: #ED1C23;">SUMSEL</h1>
                    <hr>
                </div>
                <div class="col">
                </div>
                <div class="col">
                </div>
            </div>
        </div>
    </section>

    <section class="section-review">
        <div class="container">
            <div class="row">
                <div class="col text-center" data-aos="fade-up">
                </div>
            </div>
            <div class="row justify-content-left">
                <div class="col-lg">
                    <div class="tikpol" data-aos="fade-up" data-aos-delay="100" style="text-align: justify;">
                        <p><b>Bidang Teknologi Informasi dan Komunikasi Polisi (BIDTIK)</b> bertugas menyelenggarakan pelayanan teknologi komunikasi dan informasi, meliputi kegiatan komunikasi kepolisian, pengumpulan dan pengolahan serta penyajian data, termasuk informasi kriminal dan pelayanan multimedia.
                        </p>
                        <p>
                            BIDTIK menyelenggarakan fungsi :
                            Pemeliharaan jaringan komunikasi kepolisian dan data, serta pelayanan telekomunikasi;
                            Penyelenggaraan sistem informasi kriminal, yang meliputi penyiapan dan penyajian data dan statistik kriminal; dan
                            Penyelenggaraan koordinasi dalam penggunaan teknologi komunikasi dan informasi dengan satuan fungsi di lingkungan Polres.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e9ecef" fill-opacity="1" d="M0,192L40,197.3C80,203,160,213,240,224C320,235,400,245,480,224C560,203,640,149,720,144C800,139,880,181,960,202.7C1040,224,1120,224,1200,202.7C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>

    <div class="jumbotron">
        <section class="section-wisata" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-wisata-heading" data-aos="fade-up">
                        <h4>BERITA TERKINI BID TIK</h4>
                        <p>Kabar Akurat Terpercaya</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="rekomendasi-wisata" id="popularContent">
            <div class="container">
                <div class="rekomendasi-wisata-konten row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-wisata text-center d-flex flex-column" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('assets/tes.jpg');">
                            <div class="wisata-loc">
                                Senin (29/06/2020)
                            </div>
                            <div class="wisata-name">
                                KAPOLDA Sumsel PTDH 9 Anggota, 8 Narkoba dan 1 Disersi
                            </div>
                            <div class="wisata-button mt-auto">
                                <a href="<?= base_url('user/kegiatan'); ?>" class="btn btn-wisata-details px-4">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-wisata text-center d-flex flex-column" style=" background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('assets/pp.jpg') ;">
                            <div class="wisata-loc">
                                Kamis (18/10/2018)
                            </div>
                            <div class="wisata-name">
                                Polda Sumsel Panggil Mantan Polwan yang Kampanye
                            </div>
                            <div class="wisata-button mt-auto">
                                <a href="<?= base_url('user/kegiatan'); ?>" class="btn btn-wisata-details px-4">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-wisata text-center d-flex flex-column" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('web/assets/ppp.jpg');">
                            <div class="wisata-loc">
                                Kamis (17/6/2021)
                            </div>
                            <div class="wisata-name">
                                Berantas Aksi Premanisme dan Pungli
                            </div>
                            <div class="wisata-button mt-auto">
                                <a href="<?= base_url('user/kegiatan'); ?>" class="btn btn-wisata-details px-4">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-1 col-md-2 col-sm-2 text-center">
                        <a href="<?= base_url('user/kegiatan'); ?>" class=" text-muted mt-4">Lihat Semua</a>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <!--jumbotron -->
    <section class="section-indonesia d-none d-lg-block" data-aos="zoom-in">
        <div class="container">
            <div class="row">
                <div class="col text-center section-indonesia-heading">
                    <h4>DENAH LOKASI BID TIK POLDA SUMSEL</h4>
                    <p>Gedung A Lantai 3</p>
                </div>

            </div>
            <div id="content-wrapper">
                <div class="column">
                    <div id="img-container">
                        <div id="lens"></div>
                        <img id=featured src="<?= base_url('web/'); ?>assets/denahfix.png">
                    </div>
                </div>
            </div>
    </section>
    </div>

    <br><br>
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
                        <img src="<?= base_url('web/'); ?>assets/presisi2.png" class="img-fluid" alt="" style="margin-bottom: 10px; margin-left:-25px ;">
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

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('web/'); ?>js/all.js"></script>
    <script src="<?= base_url('web/'); ?>js/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url('web/'); ?>js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script type="text/javascript" src="<?= base_url('web/'); ?>js/script.js"></script>
    <script src="<?= base_url('assets/'); ?>jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/'); ?>chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script>
</body>

</html>