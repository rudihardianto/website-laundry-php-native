<?php 
    require_once '../_header.php';
    if (!isset($_SESSION['login'])) {
        echo "
        <script>
            document.location='http://dry_laundry.test';
        </script>
        ";
        exit();
    }
    $query_ck = query("SELECT * FROM tb_riwayat_ck ORDER BY id_ck DESC");
    $query_dc = query("SELECT * FROM tb_riwayat_dc ORDER BY id_dc DESC");
    $query_cs = query("SELECT * FROM tb_riwayat_cs ORDER BY id_cs DESC");
    // var_dump($query_ck);
?>

<!-- START: title daftar riwayat transaksi -->
<section id="daftar-riwayat-transaksi" class="daftar-riwayat-transaksi mb-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h2>Daftar Riwayat Transaksi</h2>
            </div>
        </div>
    </div>
</section>
<!-- END: title daftar riwayat transaksi -->

<!-- START: daftar transaksi cuci komplit -->
<section id="daftar-transaksi-ck" class="daftar-transaksi-ck mb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Transaksi - Cuci komplit</h5>
                        <hr>
                        <div class="table-responsive text-nowrap">
                            <table id="daftar-riwayat-ck" class="table table-sm table-hover">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">#</th>
                                        <th scope="col">No. Order</th>
                                        <th scope="col">ID Pelanggan</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Paket</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Uang Bayar</th>
                                        <th scope="col">Kembalian</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($query_ck)) : ?>
                                    <?php $i = 1; foreach($query_ck as $data_ck) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?=$data_ck['or_number']?></td>
                                        <td><?=$data_ck['id_pelanggan']?></td>
                                        <td><?=$data_ck['pelanggan']?></td>
                                        <td><?=$data_ck['j_paket']?></td>
                                        <td><?=$data_ck['berat'] . " Kg"?></td>
                                        <td><?="Rp. " . $data_ck['total']?></td>
                                        <td><?="Rp. " . $data_ck['nominal_byr']?></td>
                                        <td><?="Rp. " . $data_ck['kembalian']?></td>
                                        <td><span class="badge text-bg-success"><?=$data_ck['status']?></span></td>
                                        <td>
                                            <a href="<?=url('riwayat_transaksi/riwayat_ck/detail_ck.php')?>?id_ck=<?=$data_ck['id_ck']?>"
                                                class="btn btn-primary btn-sm">
                                                Detail
                                            </a>
                                            <a href="<?=url('riwayat_transaksi/riwayat_ck/cetak_info.php')?>?id_ck=<?=$data_ck['id_ck']?>"
                                                class="btn btn-outline-secondary btn-sm">
                                                Cetak Bukti
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
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
<!-- END: daftar transaksi cuci komplit -->

<!-- START: daftar transaksi dry clean -->
<section id="daftar-transaksi-dc" class="daftar-transaksi-dc my-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Transaksi - Dry Clean</h5>
                        <hr>
                        <div class="table-responsive text-nowrap">
                            <table id="daftar-riwayat-dc" class="table table-sm table-hover">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">#</th>
                                        <th scope="col">No. Order</th>
                                        <th scope="col">ID Pelanggan</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Paket</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Uang Bayar</th>
                                        <th scope="col">Kembalian</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($query_dc)) : ?>
                                    <?php $i = 1; foreach($query_dc as $data_dc) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?=$data_dc['or_number']?></td>
                                        <td><?=$data_dc['id_pelanggan']?></td>
                                        <td><?=$data_dc['pelanggan']?></td>
                                        <td><?=$data_dc['j_paket']?></td>
                                        <td><?=$data_dc['berat'] . " Kg"?></td>
                                        <td><?="Rp. " . $data_dc['total']?></td>
                                        <td><?="Rp. " . $data_dc['nominal_byr']?></td>
                                        <td><?="Rp. " . $data_dc['kembalian']?></td>
                                        <td><span class="badge text-bg-success"><?=$data_dc['status']?></span></td>
                                        <td>
                                            <a href="<?=url('riwayat_transaksi/riwayat_dc/detail_dc.php')?>?id_dc=<?=$data_dc['id_dc']?>"
                                                class="btn btn-primary btn-sm">
                                                Detail
                                            </a>
                                            <a href="<?=url('riwayat_transaksi/riwayat_dc/cetak_info.php')?>?id_dc=<?=$data_dc['id_dc']?>"
                                                class="btn btn-outline-secondary btn-sm">
                                                Cetak Bukti
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                    <?php endif ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: daftar transaksi dry clean -->

<!-- START: daftar transaksi cuci satuan -->
<section id="daftar-transaksi-cs" class="daftar-transaksi-cs my-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Transaksi - Cuci Satuan</h5>
                        <hr>
                        <div class="table-responsive text-nowrap">
                            <table id="daftar-riwayat-cs" class="table table-sm table-hover">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">#</th>
                                        <th scope="col">No. Order</th>
                                        <th scope="col">ID Pelanggan</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Paket</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Uang Bayar</th>
                                        <th scope="col">Kembalian</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($query_cs)) : ?>
                                    <?php $i = 1; foreach($query_cs as $data_cs) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?=$data_cs['or_number']?></td>
                                        <td><?=$data_cs['id_pelanggan']?></td>
                                        <td><?=$data_cs['pelanggan']?></td>
                                        <td><?=$data_cs['j_paket']?></td>
                                        <td><?=$data_cs['jml_pcs'] . " (Pcs)"?></td>
                                        <td><?="Rp. " . $data_cs['total']?></td>
                                        <td><?="Rp. " . $data_cs['nominal_byr']?></td>
                                        <td><?="Rp. " . $data_cs['kembalian']?></td>
                                        <td><span class="badge text-bg-success"><?=$data_cs['status']?></span></td>
                                        <td>
                                            <a href="<?=url('riwayat_transaksi/riwayat_cs/detail_cs.php')?>?id_cs=<?=$data_cs['id_cs']?>"
                                                class="btn btn-primary btn-sm">
                                                Detail
                                            </a>
                                            <a href="<?=url('riwayat_transaksi/riwayat_cs/cetak_info.php')?>?id_cs=<?=$data_cs['id_cs']?>"
                                                class="btn btn-outline-secondary btn-sm">
                                                Cetak Bukti
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                    <?php endif ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: daftar transaksi cuci satuan -->

<?php require_once '../_footer.php'?>