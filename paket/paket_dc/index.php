<?php
    require_once '../../_header.php';
    if (!isset($_SESSION['login'])) {
        echo "
        <script>
            document.location='http://dry_laundry.test';
        </script>
        ";
        exit();
    }
    $data_dc = query('SELECT * FROM tb_dry_clean');
?>

<!-- START: daftar paket dry clean -->
<section id="daftar-paket-ck" class="daftar-paket-ck">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <div class="container">
                <!-- START: title daftar paket -->
                <div class="row d-flex justify-content-between align-items-center mb-3">
                    <div class="col">
                        <h2>Daftar Paket Dry Clean</h2>
                    </div>
                    <div class="col text-end">
                        <a href="<?=url('paket/paket_dc/tambah.php');?>" class="btn btn-primary">+ Tambah Paket</a>
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
                                    <table id="daftar-pkt-dc" class="table table-sm table-hover">
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
                                            <?php foreach ($data_dc as $dc): ?>
                                            <tr>
                                                <th scope="row"><?=$no++;?></th>
                                                <td><?=$dc["nama_paket_dc"];?></td>
                                                <td><?=$dc["waktu_kerja_dc"];?></td>
                                                <td><?=$dc["kuantitas_dc"];?></td>
                                                <td><?=$dc["tarif_dc"];?></td>
                                                <td>
                                                    <a
                                                        href="<?=url('paket/paket_dc/edit.php');?>?id_dc=<?=$dc['id_dc']?>">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm">Edit</button>
                                                    </a>
                                                    <a href="<?=url('paket/paket_dc/hapus.php');?>?id_dc=<?=$dc['id_dc']?>"
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
<!-- END: daftar paket dry clean -->

<?php require_once '../../_footer.php';?>