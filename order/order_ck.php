<?php
require_once '../_header.php';
$id_pel_ck = query('SELECT * FROM master WHERE level ="User"');
$data_ck   = query("SELECT * FROM tb_cuci_komplit");
// var_dump($id_pel_ck);
?>

<?php if (isset($_POST['order_ck'])): ?>
<?php if (order_ck($_POST) > 0): ?>
<!-- berhasil -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Order Berhasil Di Tambahkan.
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
                <strong>Maaf!</strong> Order Gagal Di Tambahkan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
<?php endif?>
<?php endif?>

<!-- START: order cuci komplit -->
<section id="order-cuci-komplit" class="order-cuci-komplit">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-10 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h5 class="card-title fw-bold">Cuci Komplit</h5>
                            </div>
                            <div class="col text-end text-nowrap">
                                <a href="<?=url('order/index.php');?>"
                                    class="btn btn-sm btn-outline-secondary">Kembali</a>
                            </div>
                        </div>

                        <hr>

                        <!-- START: form -->
                        <form action="" method="post">
                            <div class="row d-flex">
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="id_pel" class="form-label">Pilih ID Pelanggan</label>
                                        <select name="id_pelanggan_ck" id="id_pel" class="form-select">
                                            <option selected>- ID Pelanggan -</option>
                                            <?php foreach ($id_pel_ck as $id_pel): ?>
                                            <option><?=$id_pel['id_pelanggan']?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                    <!-- nama -->
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Pelanggan</label>
                                        <input type="text" name="nama_pel_ck" id="nama" class="form-control"
                                            autocomplete="off" required>
                                    </div>
                                    <!-- no telepon -->
                                    <div class="mb-3">
                                        <label for="no-telp" class="form-label">No Telepon</label>
                                        <input type="number" name="no_telp_ck" id="no-telp" class="form-control"
                                            autocomplete="off" required>
                                    </div>
                                    <!-- alamat -->
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea name="alamat_ck" id="alamat" class="form-control" required></textarea>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- pilih paket -->
                                    <div class="mb-3">
                                        <label for="pilih_paket" class="form-label">Pilih Paket</label>
                                        <select name="jenis_paket_ck" id="pilih_paket" class="form-select">
                                            <option selected>- Pilih Jenis Paket -</option>
                                            <?php foreach ($data_ck as $ck): ?>
                                            <option><?=$ck['nama_paket_ck']?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                    <!-- berat -->
                                    <div class="mb-3">
                                        <label for="kuantitas" class="form-label">Berat</label>
                                        <div class="input-group">
                                            <input type="number" name="berat_qty_ck" id="kuantitas" class="form-control"
                                                autocomplete="off" required>
                                            <span class="input-group-text">Kilogram</span>
                                        </div>
                                    </div>
                                    <!-- tanggal order masuk -->
                                    <div class="mb-3">
                                        <label for="tgl_order_msk" class="form-label">
                                            Tanggal Order Masuk
                                        </label>
                                        <input type="date" name="tgl_masuk_ck" id="tgl_order_msk" class="form-control"
                                            autocomplete="off" required>
                                    </div>
                                    <!-- tanggal order keluar -->
                                    <div class="mb-3">
                                        <label for="tgl_order_klr" class="form-label">
                                            Tanggal Order Keluar
                                        </label>
                                        <input type="date" name="tgl_keluar_ck" id="tgl_order_klr" class="form-control"
                                            autocomplete="off" required>
                                    </div>
                                    <!-- keterangan -->
                                    <div class="mb-3">
                                        <label for="ket" class="form-label">Keterangan</label>
                                        <textarea name="keterangan_ck" id="ket" class="form-control"></textarea>
                                    </div>

                                    <div class="text-end">
                                        <button type="reset" class="btn">Batal</button>
                                        <button type="submit" name="order_ck" class="btn btn-primary">
                                            Tambah Order
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END: form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- END: order cuci komplit -->