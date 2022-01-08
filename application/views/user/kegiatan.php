<nav>
    <a href="<?= base_url('user'); ?>" class="navbar-brand">
        <img src="<?= base_url('web/'); ?>assets/logotik.png" alt="" srcset="">
    </a>
    <a href="<?= base_url('user'); ?>" class="brand">BID TIK SUMSEL</a>
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

<!-- Breadcrumb -->
<section class="section-breadcrumb">
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><span class="active">Kegiatan Bid TIK</span></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<br><br>

<!-- About us -->
<?php
foreach ($kegiatan as $k) {
?>
    <section class="section-aboutus">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 text-center img-fluid" data-aos="fade-up">
                    <img src="<?= base_url('web/'); ?>assets/<?php echo $k->gambar ?>" alt="" style="min-width: 450px;" class="img-fluid">
                </div>
                <div class="col-lg-6 text-center aboutus-desc offset-lg-1" data-aos="fade-up">
                    <br>
                    <h5><?php echo $k->judul ?></h5>
                    <p>
                        <?php echo $k->isi ?>
                    </p>
                </div>
    </section>
    <br>
<?php } ?>
<br><br>