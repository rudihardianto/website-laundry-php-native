<?php
    require_once '_header.php';
    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }
    $jml_karyawan = count(query('SELECT * FROM master WHERE level ="Karyawan"'));
?>


<!-- START: welcome -->
<section id="welcome" class="welcome mb-4">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col">
                <div>Selamat datang, <span class="fw-bold"><?=ucwords($_SESSION['username'])?></span></div>
                <h2>Dashboard</h2>
            </div>
            <div class="col text-end">
                <a href="<?=url('order/index.php');?>" class="btn btn-primary">+ Order Baru</a>
            </div>
        </div>
    </div>
</section>
<!-- END: welcome -->

<!-- START: menu -->
<section id="menu" class="menu my-3">
    <div class="container">
        <div class="row">
            <!-- karyawan -->
            <div class="col-md-4 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col">
                                <p>Jumlah Karyawan</p>
                                <h5 class="card-title fw-bold"><?=$jml_karyawan;?></h5>
                            </div>
                            <div class="col text-end">
                                <img src="_assets/img/team.png" alt="" width="70">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- total order -->
            <div class="col-md-4 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col">
                                <p>Total Order</p>
                                <h5 class="card-title fw-bold"><?=jmlOrder();?></h5>
                            </div>
                            <div class="col text-end">
                                <img src="_assets/img/total_order.png" alt="" width="70">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- jumlah paket -->
            <div class="col-md-4 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col">
                                <p>Jumlah Paket Tersedia</p>
                                <h5 class="card-title fw-bold"><?=jmlPaket();?></h5>
                            </div>
                            <div class="col text-end">
                                <img src="_assets/img/jumlah_paket.png" alt="" width="70">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: menu -->

<!-- daftar order cuci komplit -->
<?php require_once 'daftar_order/daf_or_ck.php'?>

<!-- daftar order dry clean -->
<?php require_once 'daftar_order/daf_or_dc.php'?>

<!-- daftar order dry clean -->
<?php require_once 'daftar_order/daf_or_cs.php'?>

<?php require_once '_footer.php';?>