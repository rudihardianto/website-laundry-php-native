<!-- START: order cuci komplit -->
<section id="order-cuci-komplit" class="main-order-cuci-komplit mt-3 mb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Cuci Komplit</h5>
                        <hr>
                        <div class="table-responsive text-nowrap">
                            <table id="daftar-order-ck" class="table table-sm table-hover">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">#</th>
                                        <th scope="col">No Order</th>
                                        <th scope="col">ID Pelanggan</th>
                                        <th scope="col">Nama Pelanggan</th>
                                        <th scope="col">Jenis Paket</th>
                                        <th scope="col">Waktu Kerja</th>
                                        <th scope="col">Berat (KG)</th>
                                        <th scope="col">Tanggal Masuk</th>
                                        <th scope="col">Tanggal Keluar</th>
                                        <?php if($levelAdminKaryawan) { ?>
                                        <th scope="col">Action</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $cuci_komplit = query("SELECT * FROM tb_order_ck ORDER BY id_order_ck DESC");
                                    if (!empty($cuci_komplit)): ?>
                                    <?php $no = 1;foreach ($cuci_komplit as $ck): ?>
                                    <tr>
                                        <td scope="row"><?=$no++;?></td>
                                        <td><?=$ck['or_ck_number'];?></td>
                                        <td><?=$ck['id_pelanggan_ck'];?></td>
                                        <td><?=$ck['nama_pel_ck'];?></td>
                                        <td><?=$ck['jenis_paket_ck'];?></td>
                                        <td><?=$ck['wkt_krj_ck'];?></td>
                                        <td><?=$ck['berat_qty_ck'].' Kg';?></td>
                                        <td><?=$ck['tgl_masuk_ck'];?></td>
                                        <td><?=$ck['tgl_keluar_ck'];?></td>
                                        <?php if($levelAdminKaryawan) { ?>
                                        <td>
                                            <a href="<?=url('detail_order/detail_ck/detail_order_ck.php?or_ck_number=')?><?=$ck['or_ck_number']?>"
                                                class="btn btn-primary btn-sm">Detail</a>
                                            <a href="<?=url('daftar_order/hapus_ck.php?or_ck_number=')?><?=$ck['or_ck_number']?>"
                                                onclick="return confirm('Yakin akan menghapus?');"
                                                class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                    <?php endforeach;?>
                                    <?php else: ?>
                                    <tr>
                                        <td colspan="10" class="text-center text-muted fw-semibold py-3">
                                            Data Tidak Tersedia
                                        </td>
                                    </tr>
                                    <?php endif;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: order cuci komplit -->