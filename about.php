<?php
require_once '_header.php';

if (!isset($_SESSION['login'])) {
    echo "
        <script>
            document.location='http://dry_laundry.test';
        </script>
        ";
    exit();
}
?>

<!-- START: about -->
<section id="about" class="about my-5">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-md-6">
                <div class="card text-center justify-content-center">
                    <div class="text-center my-2 mt-5">
                        <img src="<?=url('_assets/img/logo/dry_dry.png')?>" alt="Logo rumah laundry" width="100">
                    </div>
                    <div class="card-body">
                        <h3 class="text-muted">Dry Laundry</h3>
                        <p>Jasa laundry tercepat dan termurah sidoarjo.</p>
                        <div class="row justify-content-center align-items-center mt-4 mb-3">
                            <h5>- Tentang Kami -</h5>
                            <p class="text-center">
                                Dry laundry merupakan suatu pelayanan di bidang jasa yang menggunakan media
                                online sebagai Platform untuk memudahkan pelanggan menemukan jasa laundry yang cepat dan
                                mudah. Sebagaimana kita ketahui bahwasannya kemudahan mendapatkan berbagai macam jasa
                                pada era sekarang sangatlah diperlukan, selain mudah dan cepat, kami menyediakan
                                berbagai macam paket laundry yang sesuai dengan kebutuhan cuci dan budget.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: about -->

<?php require_once '_footer.php';?>