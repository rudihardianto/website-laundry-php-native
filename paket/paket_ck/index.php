<?php
require_once '../../_header.php';
$data_ck = query('SELECT * FROM tb_cuci_komplit');
?>

<!-- START: daftar paket cuci komplit -->
<section id="daftar-paket-ck" class="daftar-paket-ck">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <div class="container">
                <!-- START: title daftar paket -->
                <div class="row d-flex justify-content-between align-items-center mb-3">
                    <div class="col">
                        <h2>Daftar Paket Cuci Komplit</h2>
                    </div>
                    <div class="col text-end">
                        <a href="<?=url('paket/paket_ck/tambah.php');?>" class="btn btn-primary">+ Tambah Paket</a>
                    </div>
                </div>
                <!-- END: title daftar paket -->

                <!-- START: form daftar paket -->
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col">
                                            <h5 class="card-title fw-bold">Daftar Paket</h5>
                                        </div>
                                        <div class="col text-end">
                                            <a href="<?=url('paket/index.php');?>"
                                                class="btn btn-sm btn-outline-secondary">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr class="table-primary">
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Paket</th>
                                                <th scope="col">Waktu Kerja</th>
                                                <th scope="col">Berat Min (KG)</th>
                                                <th scope="col">Tarif</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;?>
                                            <?php foreach ($data_ck as $ck): ?>
                                            <tr>
                                                <th scope="row"><?=$no++;?></th>
                                                <td><?=$ck["nama_paket_ck"];?></td>
                                                <td><?=$ck["waktu_kerja_ck"];?></td>
                                                <td><?=$ck["kuantitas_ck"].' Kg';?></td>
                                                <td><?=$ck["tarif_ck"];?></td>
                                                <td>
                                                    <a
                                                        href="<?=url('paket/paket_ck/edit.php');?>?id_ck=<?=$ck['id_ck']?>">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm">Edit</button>
                                                    </a>
                                                    <a href="<?=url('paket/paket_ck/hapus.php')?>?id_ck=<?=$ck['id_ck']?>"
                                                        onclick="return confirm('Yakin akan menghapus?');">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: form daftar paket -->
            </div>
        </div>
    </div>
</section>
<!-- END: daftar paket cuci komplit -->