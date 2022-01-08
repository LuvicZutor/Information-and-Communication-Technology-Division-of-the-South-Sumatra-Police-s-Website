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
    <link rel="stylesheet" href="<?= base_url('web/'); ?>css/style4.css">
    <link rel="stylesheet" href="<?= base_url('web/'); ?>css/cssPages.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>

<body>
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
    <br><br>
    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Layanan</a></li>
                        <li class="breadcrumb-item"><a href="#">Video Conference</a></li>
                    </ol>
                </div>

                <div class="container1">
                    <br><br>
                    <div class="main">
                        <form action="<?= base_url('user/vicon'); ?>" method="post" id="form">
                            <h2>FORMULIR PENGADUAN</h2>
                            <hr />
                            <?= $this->session->flashdata('message2'); ?>

                            <div>
                                <label>NIP / NRP :</label>
                                <?= form_error('nrp', '<small class="text-danger pt-7">', '</small>'); ?>
                                <input type="text" name="nrp" id="nrp" />
                            </div>

                            <div>
                                <label>NAMA :</label>
                                <?= form_error('nama', '<small class="text-danger pt-7">', '</small>'); ?>
                                <input type="text" name="nama" id="nama" />
                            </div>
                            <div>
                                <label>SATUAN KERJA :</label>
                                <?= form_error('satker', '<small class="text-danger pt-7">', '</small>'); ?>
                                <input type="text" name="satker" id="satker" />
                            </div>

                            <div>
                                <label>PERIHAL :</label>
                                <?= form_error('perihal', '<small class="text-danger pt-7">', '</small>'); ?>
                                <input type="text" name="perihal" id="perihal" />
                            </div>
                            <input type="hidden" name="waktu" id="waktu" value="<?php echo date("Y-m-d H:i:s"); ?>" />
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