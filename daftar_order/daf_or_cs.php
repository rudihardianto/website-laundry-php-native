<!-- START: order cuci satuan -->
<section id="order-satuan" class="main-order-satuan my-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Cuci Satuan</h5>
                        <hr>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">#</th>
                                        <th scope="col">No Order</th>
                                        <th scope="col">ID Pelanggan</th>
                                        <th scope="col">Nama Pelanggan</th>
                                        <th scope="col">Jenis Paket</th>
                                        <th scope="col">Waktu Kerja</th>
                                        <th scope="col">Jumlah Barang</th>
                                        <th scope="col">Tanggal Masuk</th>
                                        <th scope="col">Tanggal Keluar</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $cuci_satuan = query('SELECT * FROM tb_order_cs ORDER BY id_order_cs DESC');
                                    if (!empty($cuci_satuan)): ?>
                                    <?php $no_cs = 1; foreach ($cuci_satuan as $cs): ?>
                                    <tr>
                                        <th scope="row"><?=$no++;?></th>
                                        <td><?=$cs['or_cs_number'];?></td>
                                        <td><?=$cs['id_pelanggan_cs'];?></td>
                                        <td><?=$cs['nama_pel_cs'];?></td>
                                        <td><?=$cs['jenis_paket_cs'];?></td>
                                        <td><?=$cs['wkt_krj_cs'];?></td>
                                        <td><?=$cs['jml_pcs'].' Pcs';?></td>
                                        <td><?=$cs['tgl_masuk_cs'];?></td>
                                        <td><?=$cs['tgl_keluar_cs'];?></td>
                                        <td>
                                            <a
                                                href="<?=url('detail_order/detail_cs/detail_order_cs.php?or_cs_number=')?><?=$cs['or_cs_number']?>">
                                                <button type="button" class="btn btn-primary btn-sm">Detail</button>
                                            </a>
                                            <a href="<?=url('daftar_order/hapus_cs.php?or_cs_number=')?><?=$cs['or_cs_number']?>"
                                                onclick="return confirm('Yakin akan menghapus?');" <button type="button"
                                                class="btn btn-danger btn-sm">Hapus</button>
                                            </a>
                                        </td>
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
<!-- END: order cuci satuan -->