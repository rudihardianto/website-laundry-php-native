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
$id_pel_dc = query("SELECT * FROM master WHERE level ='User' ORDER BY id_user");
$data_dc   = query("SELECT * FROM tb_dry_clean");
?>

<?php if (isset($_POST['order_dc'])): ?>
<?php if (orderDc($_POST) > 0): ?>
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

<!-- START: order dry clean -->
<section id="order-cuci-komplit" class="order-cuci-komplit">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-10 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h5 class="card-title fw-bold">Dry Clean</h5>
                            </div>
                            <div class="col text-end text-nowrap">
                                <a href="<?=url('order/index.php');?>"
                                    class="btn btn-sm btn-outline-secondary">Kembali</a>
                            </div>
                        </div>

                        <hr>

                        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET"
                            class="row row-cols-lg-auto g-3  justify-content-center align-items-center my-4">
                            <div class="col-12">
                                <label for="id_pel" class="form-label fw-semibold">Pilih ID Pelanggan</label>
                            </div>
                            <div class="col-12">
                                <!-- select id pelanggan -->
                                <select name="id_user" class="form-select" id="select_box">
                                    <option selected>-- Pilih ID Pelanggan --</option>
                                    <?php foreach ($id_pel_dc as $id): ?>
                                    <option value="<?=$id['id_user'];?>">
                                        <?php echo $id['id_pelanggan']; ?> | <?php echo $id['nama']; ?>
                                    </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="col-2 col-md-12">
                                <input type="submit" value="Pilih" class="btn btn-outline-primary">
                            </div>
                            <div class="col-2 col-md-12">
                                <a href="<?=url('order/order_dc.php');?>" class="btn btn-outline-secondary">Refresh</a>
                            </div>
                        </form>

                        <hr>

                        <!-- START: form -->
                        <?php
if (isset($_GET['id_user'])) {
    //menampilkan data pelanggan berdasarkan pilihan combobox ke dalam form
    $id_user = $_GET['id_user'];
    $id      = mysqli_query($db, "SELECT * FROM master WHERE id_user='$id_user' ORDER BY id_user");
    $id_user = mysqli_fetch_array($id);
    ?>
                        <form action="" method="post">
                            <div class="row d-flex">
                                <div class="col-12 col-md-6">
                                    <!-- id pelanggan -->
                                    <div class="mb-3">
                                        <label for="id_pel" class="form-label">ID Pelanggan</label>
                                        <input name="id_pelanggan_dc" id="id_pel" class="form-control"
                                            value="<?=$id_user["id_pelanggan"];?>" readonly>
                                    </div>
                                    <!-- nama -->
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Pelanggan</label>
                                        <input name="nama_pel_dc" id="nama" class="form-control"
                                            value="<?=$id_user["nama"];?>" readonly>
                                    </div>
                                    <!-- no telepon -->
                                    <div class="mb-3">
                                        <label for="no-telp" class="form-label">No Telepon</label>
                                        <input name="no_telp_dc" id="no-telp" class="form-control"
                                            value="<?=$id_user["no_telp"];?>" readonly>
                                    </div>
                                    <!-- alamat -->
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea name="alamat_dc" id="alamat" class="form-control"
                                            readonly><?=$id_user["alamat"];?></textarea>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- pilih paket -->
                                    <div class="mb-3">
                                        <label for="pilih_paket" class="form-label">Pilih Paket</label>
                                        <select name="jenis_paket_dc" id="pilih_paket" class="form-select">
                                            <option selected>- Pilih Jenis Paket -</option>
                                            <?php foreach ($data_dc as $dc): ?>
                                            <option><?=$dc['nama_paket_dc']?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                    <!-- berat -->
                                    <div class="mb-3">
                                        <label for="kuantitas" class="form-label">Berat</label>
                                        <div class="input-group">
                                            <input type="number" name="berat_qty_dc" id="kuantitas" class="form-control"
                                                required>
                                            <span class="input-group-text">Kilogram</span>
                                        </div>
                                    </div>
                                    <!-- tanggal order masuk -->
                                    <div class="mb-3">
                                        <label for="tgl_order_msk" class="form-label">
                                            Tanggal Order Masuk
                                        </label>
                                        <input type="date" name="tgl_masuk_dc" id="tgl_order_msk" class="form-control"
                                            required>
                                    </div>
                                    <!-- tanggal order keluar -->
                                    <div class="mb-3">
                                        <label for="tgl_order_klr" class="form-label">
                                            Tanggal Order Keluar
                                        </label>
                                        <input type="date" name="tgl_keluar_dc" id="tgl_order_klr" class="form-control"
                                            required>
                                    </div>
                                    <!-- keterangan -->
                                    <div class="mb-3">
                                        <label for="ket" class="form-label">Keterangan</label>
                                        <textarea name="keterangan_dc" id="ket" class="form-control"></textarea>
                                    </div>

                                    <div class="text-end">
                                        <button type="reset" class="btn">Batal</button>
                                        <button type="submit" name="order_dc" class="btn btn-primary">
                                            Tambah Order
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
}?>
                        <!-- END: form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- END: order dry clean -->

<?php include '../_footer.php'?>