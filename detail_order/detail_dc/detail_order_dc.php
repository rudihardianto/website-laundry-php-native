<?php 
    require_once '../../_header.php';
    if (!isset($_SESSION['login'])) {
        echo "
        <script>
            document.location='http://localhost/laundry_rizal_skripsi/';
        </script>
        ";
        exit();
    }
    $no_dc = $_GET['or_dc_number'];
    $data = query("SELECT * FROM tb_order_dc WHERE or_dc_number = '$no_dc'")[0];

    $dataSukses = isset(query("SELECT * FROM tb_riwayat_dc WHERE or_number = '$no_dc'")[0]["status"]);
    // var_dump($data);
?>

<?php if (isset($_POST['bayar_dc'])) : ?>
<script>
window.location = "http://localhost/laundry_rizal_skripsi/detail_order/detail_dc/bayar.php?or_dc_number=<?=$no_dc?>"
</script>
<?php endif ?>

<!-- START: menu -->
<section id="detail-order-dc" class="detail-order-dc">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-8 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h5 class="card-title fw-bold">Detail Order</h5>
                            </div>
                            <div class="col text-end text-nowrap">
                                <h5 class="card-title text-muted">No Order:
                                    <span class="fw-bold text-black"><?= $data['or_dc_number']?></span>
                                </h5>
                            </div>
                        </div>

                        <hr>

                        <form action="" method="post">
                            <!-- customer -->
                            <div class="row justify-content-center">
                                <div class="col col-md-10">
                                    <input type="hidden" name="or_dc_number" value="<?=$data['or_dc_number']?>">
                                    <input type="hidden" name="id_pel" value="<?=$data['id_pelanggan_dc']?>">
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
                                                    <td>
                                                        <input type="text" name="nama_pel_dc" disabled
                                                            class="bg-white border border-0 text-black"
                                                            value="<?=$data['nama_pel_dc']?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold">Nomer Telepon</td>
                                                    <td>
                                                        <input type="text" name="no_telp_dc" disabled
                                                            class="bg-white border border-0 text-black"
                                                            value="<?=$data['no_telp_dc']?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold">Alamat</td>
                                                    <td>
                                                        <textarea cols="50" name="alamat_dc" disabled
                                                            class="bg-white border border-0 text-black"><?=$data['alamat_dc']?></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold">Order Masuk</td>
                                                    <td>
                                                        <input type="text" name="tgl_masuk_dc" disabled
                                                            class="bg-white border border-0 text-black"
                                                            value="<?=$data['tgl_masuk_dc']?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold">Diambil Pada</td>
                                                    <td>
                                                        <input type="text" name="tgl_keluar_dc" disabled
                                                            class="bg-white border border-0 text-black"
                                                            value="<?=$data['tgl_keluar_dc']?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold">Durasi Kerja</td>
                                                    <td>
                                                        <input type="text" name="wkt_krj_dc" disabled
                                                            class="bg-white border border-0 text-black"
                                                            value="<?=$data['wkt_krj_dc']?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold">Jenis Paket</td>
                                                    <td>
                                                        <input type="text" name="jenis_paket_dc" disabled
                                                            class="bg-white border border-0 text-black"
                                                            value="<?=$data['jenis_paket_dc']?>">
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
                                                    <td colspan="4">
                                                        <input type="text" name="berat_qty_dc" disabled
                                                            class="bg-white border border-0 text-black"
                                                            value="<?=$data['berat_qty_dc'] . ' Kg'?>">
                                                    </td>
                                                    <td colspan="4">
                                                        <input type="text" name="harga_perkilo" disabled
                                                            class="bg-white border border-0 text-black"
                                                            value="<?= 'Rp. ' . $data['harga_perkilo']?>">
                                                    </td>
                                                    <td colspan="4">
                                                        <input type="text" name="tot_bayar" disabled
                                                            class="bg-white border border-0 text-black"
                                                            value="<?= 'Rp. ' . $data['tot_bayar']?>">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- keterangan -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="fw-semibold">Keterangan:</div>
                                            <input type="text" name="keterangan_dc" disabled
                                                class="bg-white border border-0 text-black lead fs-6 fst-italic"
                                                value="<?=$data['keterangan_dc']?>">
                                        </div>
                                        <hr class="my-3">
                                        <div class="col text-end">
                                            <?php if(!$dataSukses) { ?>
                                            <button type="submit" name="bayar_dc" class="btn btn-primary">
                                                Bayar Sekarang
                                            </button>
                                            <?php } else { ?>
                                            <span class="btn btn-success">
                                                Sudah Dibayar
                                            </span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: menu -->

<?php require_once '../../_footer.php'?>