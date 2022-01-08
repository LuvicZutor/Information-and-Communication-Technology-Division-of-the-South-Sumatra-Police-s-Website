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
<script src="<?= base_url('web/'); ?> script/navbar-scroll.js"></script>
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