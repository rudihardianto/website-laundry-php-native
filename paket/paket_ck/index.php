<?php require_once '../../_header.php';?>

<!-- START: daftar paket cuci komplit -->
<section id="daftar-paket-ck" class="daftar-paket-ck my-4">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <div class="container">
                <!-- START: title daftar paket -->
                <div class="row d-flex justify-content-between align-items-center my-3">
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
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <a href="<?=url('paket/paket_ck/edit.php');?>">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm">Edit</button>
                                                    </a>
                                                    <a href="">
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
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