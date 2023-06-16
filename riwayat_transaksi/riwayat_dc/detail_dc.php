<?php 
    require_once '../../_header.php';
    $get_id = $_GET['id_dc'];
    $data = query("SELECT * FROM tb_riwayat_dc WHERE id_dc = $get_id")[0];
?>

<!-- START: menu -->
<section id="detail-order-ck" class="detail-order-ck">
    <div class="container">
        <div class="row justify-content-center">
            <!-- title -->
            <div class="col col-md-8 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h5 class="card-title fw-bold">Detail Order</h5>
                            </div>
                            <div class="col text-end text-nowrap">
                                <h5 class="card-title text-muted">No Order:
                                    <span class="fw-bold text-black"><?=$data['or_number']?></span>
                                </h5>
                            </div>
                        </div>

                        <hr>

                        <!-- customer -->
                        <div class="row justify-content-center">
                            <div class="col col-md-10">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-sm table-bordered">
                                        <thead>
                                            <tr class="table-primary">
                                                <td colspan="12"><span class="fw-bold">Customer</span></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-semibold">Nama</td>
                                                <td><?=$data['pelanggan']?></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Nomer Telepon</td>
                                                <td><?=$data['no_telp']?></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Alamat</td>
                                                <td>
                                                    <textarea cols="50" name="alamat_ck" disabled
                                                        class="bg-white border border-0 text-black"><?=$data['alamat']?></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Order Masuk</td>
                                                <td><?=$data['tgl_msk']?></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Diambil Pada</td>
                                                <td><?=$data['tgl_klr']?></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Durasi Kerja</td>
                                                <td><?=$data['wkt_kerja']?></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Jenis Paket</td>
                                                <td><?=$data['j_paket']?></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Status</td>
                                                <td class="fw-semibold">
                                                    <span class="badge text-bg-success"><?=$data['status']?></span>
                                                </td>
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
                                    <table class="table table-sm table-bordered">
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
                                                <td colspan="4"><?=$data['berat'] . " Kg"?></td>
                                                <td colspan="4"><?="Rp. " . $data['h_perkilo']?></td>
                                                <td colspan="4"><?="Rp. " . $data['total']?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" class="text-center fw-semibold table-active">
                                                    Nominal Bayar
                                                </td>
                                                <td colspan="4" class="fw-semibold">
                                                    <?="Rp. " . $data['nominal_byr']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" class="text-center fw-semibold table-active">
                                                    Uang Kembali
                                                </td>
                                                <td colspan="4" class="fw-semibold">
                                                    <?="Rp. " . $data['kembalian']?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- keterangan -->
                                <div class="row">
                                    <div class="col">
                                        <div class="fw-semibold">Keterangan:</div>
                                        <div class="lead fs-6 fst-italic">
                                            <?=$data['keterangan']?>
                                        </div>
                                    </div>
                                    <hr class="my-3">
                                    <div class="col text-end">
                                        <a href="<?=url('riwayat_transaksi');?>" class="btn btn-outline-secondary">
                                            Kembali
                                        </a>
                                        <a href="<?=url('riwayat_transaksi/riwayat_dc/cetak_info.php')?>?id_dc=<?=$data['id_dc']?>"
                                            class="btn btn-primary">
                                            Cetak Bukti
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