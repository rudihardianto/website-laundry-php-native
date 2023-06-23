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
    $id_cs   = $_GET['id_cs'];
    $data_cs = query("SELECT * FROM tb_cuci_satuan WHERE id_cs = '$id_cs'")[0];
?>

<?php if (isset($_POST['ubah'])): ?>
<?php if (update_cs($_POST) > 0): ?>
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

<!-- START: update paket cuci satuan -->
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
                                <a href="<?=url('paket/paket_cs/index.php');?>"
                                    class="btn btn-sm btn-outline-secondary">Kembali</a>
                            </div>
                        </div>
                        <hr>

                        <!-- START: form update daftar paket cuci satuan -->
                        <div class="row justify-content-center">
                            <div class="col col-md-10">
                                <form action="" method="post">
                                    <input type="hidden" name="id_cs" value="<?=$data_cs['id_cs']?>">
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama Paket</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama_cs" id="nama" class="form-control"
                                                value="<?=$data_cs['nama_cs'];?>" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="wk" class="col-sm-3 col-form-label">Waktu Kerja</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="waktu_kerja_cs" id="wk" class="form-control"
                                                value="<?=$data_cs['waktu_kerja_cs'];?>" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row align-items-center">
                                        <label for="kuantitas" class="col-sm-3 form-label">Berat Min</label>
                                        <div class="col input-group">
                                            <input type="number" name="kuantitas_cs" id="kuantitas" class="form-control"
                                                value="<?=$data_cs['kuantitas_cs'];?>" autocomplete="off" required>
                                            <span class="input-group-text">Kilogram</span>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tarif" class="col-sm-3 col-form-label">Tarif</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="tarif_cs" id="tarif" class="form-control"
                                                value="<?=$data_cs['tarif_cs'];?>" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" name="ubah" class="btn btn-primary"
                                            onclick="return confirm('Ingin ubah Data?');">
                                            Update Data
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END: form update daftar paket cuci satuan -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: update paket cuci satuan -->

<?php require_once '../../_footer.php';?>