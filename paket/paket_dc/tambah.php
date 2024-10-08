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

<?php if (isset($_POST['tambah'])): ?>
<?php if (addDc($_POST) > 0): ?>
<!-- berhasil -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Paket Berhasil Di Tambahkan.
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
                <strong>Maaf!</strong> Paket Gagal Di Tambahkan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
<?php endif?>
<?php endif?>

<!-- START: tambah paket dry clean -->
<section id="tambah-paket-ck" class="tambah-paket-ck">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-10 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h5 class="card-title fw-bold">Tambah Paket Dry Clean</h5>
                            </div>
                            <div class="col text-end">
                                <a href="<?=url('paket/paket_dc/index.php');?>"
                                    class="btn btn-sm btn-outline-secondary">Kembali</a>
                            </div>
                        </div>
                        <hr>

                        <!-- START: form tambah daftar paket dry clean -->
                        <div class="row justify-content-center">
                            <div class="col col-md-10">
                                <form action="" method="post">
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama Paket</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama_paket_dc" id="nama" class="form-control"
                                                autocomplete="off" required autofocus>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="wk" class="col-sm-3 col-form-label">Waktu Kerja</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="waktu_kerja_dc" id="wk" class="form-control"
                                                autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row align-items-center">
                                        <label for="kuantitas" class="col-sm-3 form-label">Berat Min</label>
                                        <div class="col input-group">
                                            <input type="number" name="kuantitas_dc" id="kuantitas" class="form-control"
                                                autocomplete="off" required>
                                            <span class="input-group-text">Kilogram</span>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tarif" class="col-sm-3 col-form-label">Tarif</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="tarif_dc" id="tarif" class="form-control"
                                                autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END: form tambah daftar paket dry clean -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: tambah paket dry clean -->

<?php require_once '../../_footer.php';?>