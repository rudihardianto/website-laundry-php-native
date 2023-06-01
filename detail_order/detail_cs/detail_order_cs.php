<?php require_once '../../_header.php'?>

<!-- START: menu -->
<section id="detail-order-cs" class="detail-order-cs my-3 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-10 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h5 class="card-title fw-bold">Detail Order</h5>
                            </div>
                            <div class="col text-end text-nowrap">
                                <h5 class="card-title text-muted">No Order:
                                    <span class="fw-bold text-black">CK-6454F5A</span>
                                </h5>
                            </div>
                        </div>
                        <hr>
                        <!-- customer -->
                        <div class="row justify-content-center">
                            <div class="col col-md-10">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="table-primary">
                                                <td colspan="12"><span class="fw-bold">Customer</span></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-semibold">Nama</td>
                                                <td>Rizal Hanafi</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Nomer Telepon</td>
                                                <td>089012930101</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Alamat</td>
                                                <td>Sidoarjo</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Order Masuk</td>
                                                <td>12 Mei 2023</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Diambil Pada</td>
                                                <td>20 Mei 2023</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Durasi Kerja</td>
                                                <td>8 Hari</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Jenis Paket</td>
                                                <td>Cuci Komplit Kilat</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- order -->
                        <div class="row justify-content-center">
                            <div class="col col-md-10">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="table-primary">
                                                <td colspan="12"><span class="fw-bold">Order</span></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="4" class="fw-semibold table-active">Berat (Kg)</td>
                                                <td colspan="4" class="fw-semibold table-active">Harga Per-Kg</td>
                                                <td colspan="4" class="fw-semibold table-active">Total Bayar</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">2 Kg</td>
                                                <td colspan="4">Rp. 15000</td>
                                                <td colspan="4">Rp. 30000</td>
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
                                    <div class="col text-end">
                                        <a href="<?=url('detail_order/detail_cs/bayar.php');?>">
                                            <button type="submit" class="btn btn-primary">
                                                Bayar Sekarang
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: menu -->

<?php require_once '../../_footer.php'?>