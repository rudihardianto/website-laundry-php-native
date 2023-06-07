<?php
require_once '../../_header.php';
$id_ck   = $_GET['id_ck'];
$data_ck = query("SELECT * FROM tb_cuci_komplit WHERE id_ck = '$id_ck'")[0];
?>

<?php if (isset($_POST['ubah'])): ?>
<?php if (update_ck($_POST) > 0): ?>
<!-- berhasil -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Paket Berhasil Di Ubah.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<!-- gagal -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Maaf!</strong> Paket Gagal Di Ubah.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
<?php endif?>
<?php endif?>

<!-- START: update paket cuci komplit -->
<section id="update-paket-ck" class="update-paket-ck">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-10 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h5 class="card-title fw-bold">Ubah Paket</h5>
                            </div>
                            <div class="col text-end">
                                <a href="<?=url('paket/paket_ck/index.php');?>"
                                    class="btn btn-sm btn-outline-secondary">Kembali</a>
                            </div>
                        </div>
                        <hr>

                        <!-- START: form update daftar paket cuci komplit -->
                        <div class="row justify-content-center">
                            <div class="col col-md-10">
                                <form action="" method="post">
                                    <input type="hidden" name="id_ck" value="<?=$data_ck['id_ck']?>">
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama Paket</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama_paket_ck" id="nama" class="form-control"
                                                value="<?=$data_ck["nama_paket_ck"];?>" autocomplete="off" required
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="wk" class="col-sm-3 col-form-label">Waktu Kerja</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="waktu_kerja_ck" id="wk" class="form-control"
                                                value="<?=$data_ck["waktu_kerja_ck"];?>" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row align-items-center">
                                        <label for="kuantitas" class="col-sm-3 form-label">Berat Min</label>
                                        <div class="col input-group">
                                            <input type="number" name="kuantitas_ck" id="kuantitas" class="form-control"
                                                value="<?=$data_ck["kuantitas_ck"];?>" autocomplete="off" required>
                                            <span class="input-group-text">Kilogram</span>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tarif" class="col-sm-3 col-form-label">Tarif</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="tarif_ck" id="tarif" class="form-control"
                                                value="<?=$data_ck["tarif_ck"];?>" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" name="ubah" class="btn btn-primary">Update Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END: form update daftar paket cuci komplit -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: update paket cuci komplit -->