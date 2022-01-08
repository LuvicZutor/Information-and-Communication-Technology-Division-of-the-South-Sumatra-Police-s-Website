<nav>
    <!-- Navbar -->
    <a href="#" class="navbar-brand">
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
<br><br><br><br>

<div style="padding :20px 170px" ;>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.491607823876!2d104.737721314656!3d-2.9610042405805035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75e7074d1b39%3A0xb49ed2abd2c5b2c8!2sPolda%20Sumatera%20Selatan!5e0!3m2!1sid!2sid!4v1627956798405!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<div class="container">
    <div class="col-md-12">
        <p><i class="fa fa-home"></i> Jl. Jend. Sudirman No.KM.4,5, Pahlawan, Kec. Kemuning, Kota Palembang, Sumatera Selatan 30151</p>
        <a href="bidtikpoldasumsel@gmail.com">
            <p><i class="fa fa-envelope"></i> bidtikpoldasumsel@gmail.com</p>
        </a>
        <a href="www.poldasumsel.id">
            <p><i class="fa fa-desktop"></i> www.poldasumsel.id</p>
        </a>
        <a href="tel:(0711)314678">
            <p><i class="fa fa-phone"></i> (0711) 314678</p>
        </a>
    </div>
</div>
<br>