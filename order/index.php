<?php require_once '../_header.php';?>

<!-- START: order baru -->
<section id="tambah-data-karyawan" class="tambah-data-karyawan my-3 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-10 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h5 class="card-title fw-bold">Tambah Order Baru</h5>
                            </div>
                            <div class="col text-end text-nowrap">
                                <a href="<?=url();?>" class="btn btn-sm btn-outline-secondary">Kembali</a>
                            </div>
                        </div>

                        <hr>
                        <p class="text-center fw-semibold">Pilih Paket</p>

                        <div class="row">
                            <!-- START: cuci komplit -->
                            <div class="col col-md-4 my-2 my-md-0">
                                <a href="<?=url('order/order_ck.php');?>" class="text-decoration-none text-muted">
                                    <div class="card d-flex justify-content-center align-items-center">
                                        <img src="<?=url('_assets/img/cuci_komplit.png')?>" width="165">
                                        <div class="card-body">
                                            <h5 class="text-center">Cuci Komplit</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- END: cuci komplit -->

                            <!-- START: dry clean -->
                            <div class="col col-md-4 my-2 my-md-0">
                                <a href="<?=url('order/order_dc.php');?>" class="text-decoration-none text-muted">
                                    <div class="card d-flex justify-content-center align-items-center">
                                        <img src="<?=url('_assets/img/dry_clean.png')?>" width="165">
                                        <div class="card-body">
                                            <h5 class="text-center">Dry Clean</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- END: dry clean -->

                            <!-- START: cuci satuan -->
                            <div class="col col-md-4 my-2 my-md-0">
                                <a href="<?=url('order/order_cs.php');?>" class="text-decoration-none text-muted">
                                    <div class="card d-flex justify-content-center align-items-center">
                                        <img src="<?=url('_assets/img/kemeja_2.png')?>" width="165">
                                        <div class="card-body">
                                            <h5 class="text-center">Cuci Satuan</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- END: cuci satuan -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: order baru -->