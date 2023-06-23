<!-- START: dry clean -->
<section id="order-dry-clean" class="main-order-dry-clean my-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Dry Clean (Cuci Kering)</h5>
                        <hr>
                        <div class="table-responsive text-nowrap">
                            <table id="daftar-order-dc" class="table table-sm table-hover">
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
                                    <?php $dry_clean = query('SELECT * FROM tb_order_dc ORDER BY id_order_dc DESC');
                                    if (!empty($dry_clean)): ?>
                                    <?php $no = 1; foreach ($dry_clean as $dc): ?>
                                    <tr>
                                        <td scope="row"><?= $no++; ?></td>
                                        <td><?=$dc['or_dc_number'];?></td>
                                        <td><?=$dc['id_pelanggan_dc'];?></td>
                                        <td><?=$dc['nama_pel_dc'];?></td>
                                        <td><?=$dc['jenis_paket_dc'];?></td>
                                        <td><?=$dc['wkt_krj_dc'];?></td>
                                        <td><?=$dc['berat_qty_dc'].' Kg';?></td>
                                        <td><?=$dc['tgl_masuk_dc'];?></td>
                                        <td><?=$dc['tgl_keluar_dc'];?></td>
                                        <?php if($levelAdminKaryawan) { ?>
                                        <td>
                                            <a
                                                href="<?=url('detail_order/detail_dc/detail_order_dc.php?or_dc_number=')?><?=$dc['or_dc_number']?>">
                                                <button type="button" class="btn btn-primary btn-sm">Detail</button>
                                            </a>
                                            <a href="<?=url('daftar_order/hapus_dc.php?or_dc_number=')?><?=$dc['or_dc_number']?>"
                                                onclick="return confirm('Yakin akan menghapus?');">
                                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                            </a>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php endif?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: dry clean -->