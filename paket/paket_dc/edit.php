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
    $id_dc   = $_GET['id_dc'];
    $data_dc = query("SELECT * FROM tb_dry_clean WHERE id_dc = '$id_dc'")[0];
?>


<?php if (isset($_POST['ubah'])): ?>
<?php if (update_dc($_POST) > 0): ?>
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

<!-- START: update dry clean -->
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
                                <a href="<?=url('paket/paket_dc/index.php');?>"
                                    class="btn btn-sm btn-outline-secondary">Kembali</a>
                            </div>
                        </div>
                        <hr>

                        <!-- START: form update daftar dry clean -->
                        <div class="row justify-content-center">
                            <div class="col col-md-10">
                                <form action="" method="post">
                                    <input type="hidden" name="id_dc" value="<?=$data_dc['id_dc']?>">
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama Paket</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama_paket_dc" id="nama" class="form-control"
                                                value="<?=$data_dc["nama_paket_dc"];?>" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="wk" class="col-sm-3 col-form-label">Waktu Kerja</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="waktu_kerja_dc" id="wk" class="form-control"
                                                value="<?=$data_dc["waktu_kerja_dc"];?>" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row align-items-center">
                                        <label for="kuantitas" class="col-sm-3 form-label">Berat Min</label>
                                        <div class="col input-group">
                                            <input type="number" name="kuantitas_dc" id="kuantitas" class="form-control"
                                                value="<?=$data_dc["kuantitas_dc"];?>" autocomplete="off" required>
                                            <span class="input-group-text">Kilogram</span>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tarif" class="col-sm-3 col-form-label">Tarif</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="tarif_dc" id="tarif" class="form-control"
                                                value="<?=$data_dc["tarif_dc"];?>" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="" class="btn btn-outline-secondary">Refresh</a>

                                        <button type="submit" name="ubah" class="btn btn-primary"
                                            onclick="return confirm('Ingin ubah Data?');">
                                            Update Data
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END: form update daftar dry clean -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: update dry clean -->

<?php require_once '../../_footer.php';?>