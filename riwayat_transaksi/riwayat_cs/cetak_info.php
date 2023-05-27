<?php require_once '../../_header.php'?>

<!-- START: menu -->
<section id="invoice" class="invoice my-3 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-5">
                <div class="card">
                    <div class="card-body">
                        <!-- START: invoice header -->
                        <div class="invoice-header">
                            <div class="row d-flex align-items-center text-center">
                                <div class="col">
                                    <!-- logo -->
                                    <div class="logo">
                                        <img src="<?=url('_assets/img/logo/dry_dry.png');?>" height="50" class="my-2">
                                    </div>
                                    <!-- no order -->
                                    <div class="invoice-no_order">
                                        <span class="fw-semibold text-muted">Invoice Number : CS-6454F5A</span>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <!-- END: invoice header -->

                        <!-- START: invoice body -->
                        <div class="invoice-body">
                            <div class="row align-items-center text-center">
                                <div class="col">
                                    <!-- title invoice body -->
                                    <div class="fw-semibold text-muted my-2">
                                        Bukti Transaksi
                                    </div>
                                </div>
                            </div>

                            <div class="table-invoice">
                                <!-- nama -->
                                <div class="row my-1">
                                    <div class="col fw-semibold">Nama</div>
                                    <div class="col">Rizal</div>
                                </div>
                                <!-- telepon -->
                                <div class="row my-1">
                                    <div class="col fw-semibold">Telepon</div>
                                    <div class="col">089009012932</div>
                                </div>
                                <!-- alamat -->
                                <div class="row my-1">
                                    <div class="col fw-semibold">Alamat</div>
                                    <div class="col">Sidoarjo</div>
                                </div>
                                <!-- tanggal order -->
                                <div class="row my-1">
                                    <div class="col fw-semibold">Tanggal Order</div>
                                    <div class="col">12 mei 2000</div>
                                </div>
                                <!-- tanggal diambil -->
                                <div class="row my-1">
                                    <div class="col fw-semibold">Tanggal Diambil</div>
                                    <div class="col">13 Mei 2000</div>
                                </div>

                                <!-- table rincian barang -->
                                <div class="row justify-content-center mt-3">
                                    <div class="col">
                                        <div class="table-responsive">
                                            <table class="table border">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="4" class="fw-semibold">Jenis Paket
                                                        </td>
                                                        <td colspan="4" class="fw-semibold">Berat (Kg)</td>
                                                        <td colspan="4" class="fw-semibold">Harga Per-Kg
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">Cuci Komplit Reguler</td>
                                                        <td colspan="4">2 Kg</td>
                                                        <td colspan="4">Rp. 30000 x 1</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="8" class="text-end fw-semibold table-active">
                                                            Total
                                                        </td>
                                                        <td colspan="4" class="">Rp. 120000</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="8" class="text-end fw-semibold table-active">
                                                            Nominal Bayar
                                                        </td>
                                                        <td colspan="4" class="">Rp. 120000</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="8" class="text-end fw-semibold table-active">
                                                            Uang Kembali
                                                        </td>
                                                        <td colspan="4" class="">Rp. 30000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- keterangan -->
                                        <div class="row">
                                            <div class="col">
                                                <div class="fw-semibold">Keterangan:</div>
                                                <div class="lead fs-6 fst-italic">
                                                    This is a lead paragraph. It stands out from regular paragraphs.
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="footer-invoice">
                                                <div class="text-center fs-5 fw-bold">Dry Laundry</div>
                                                <div class="text-center">terimakasih telah menggunakan jasa kami.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: invoice body -->
                    </div>
                </div>
            </div>

            <div class="col-3">
                <!-- START: button -->
                <div class="cetak text-nowrap">
                    <div class="col mb-2">
                        <a href="<?=url('riwayat_transaksi/riwayat_ck/cetak_info.php');?>">
                            <button type="submit" class="btn btn-outline-primary fs-5 fw-semibold">
                                <img src="<?=url('_assets/img/printer.svg')?>" alt="" height="50" class="text-wrap">
                                Cetak Bukti
                            </button>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?=url('riwayat_transaksi');?>">
                            <button type="submit" class="btn btn-outline-secondary">
                                Kembali
                            </button>
                        </a>
                    </div>
                </div>
                <!-- END: button -->
            </div>
        </div>
</section>
<!-- END: menu -->

<?php require_once '../../_footer.php'?>