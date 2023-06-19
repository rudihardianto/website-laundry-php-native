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
    $data_cs = query('SELECT * FROM tb_cuci_satuan');
?>

<!-- START: daftar cuci satuan -->
<section id="daftar-paket-ck" class="daftar-paket-ck">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <div class="container">
                <!-- START: title daftar paket -->
                <div class="row d-flex justify-content-between align-items-center mb-3">
                    <div class="col">
                        <h2>Daftar Paket Cuci Satuan</h2>
                    </div>
                    <div class="col text-end">
                        <a href="<?=url('paket/paket_cs/tambah.php');?>" class="btn btn-primary">+ Tambah Paket</a>
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
                                            <?php foreach ($data_cs as $cs): ?>
                                            <tr>
                                                <th scope="row"><?=$no++;?></th>
                                                <td><?=$cs['nama_cs'];?></td>
                                                <td><?=$cs['waktu_kerja_cs'];?></td>
                                                <td><?=$cs['kuantitas_cs'];?></td>
                                                <td><?=$cs['tarif_cs'];?></td>
                                                <td>
                                                    <a
                                                        href="<?=url('paket/paket_cs/edit.php');?>?id_cs=<?=$cs['id_cs']?>">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm">Edit</button>
                                                    </a>
                                                    <a href="<?=url('paket/paket_cs/hapus.php');?>?id_cs=<?=$cs['id_cs']?>"
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
<!-- END: daftar cuci satuan -->

<?php require_once '../../_footer.php';?>