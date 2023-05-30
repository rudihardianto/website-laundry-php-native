<?php require_once '../_header.php';?>

<!-- START: order cuci satuan -->
<section id="order-cuci-komplit" class="order-cuci-komplit my-3 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-10 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h5 class="card-title fw-bold">Cuci Satuan</h5>
                            </div>
                            <div class="col text-end text-nowrap">
                                <a href="<?=url('order/index.php');?>"
                                    class="btn btn-sm btn-outline-secondary">Kembali</a>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <!-- START: form -->
                            <div class="col">
                                <form action="" method="post">
                                    <div class="row d-flex">
                                        <div class="col-12 col-md-6">
                                            <!-- nama -->
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama Pelanggan</label>
                                                <input type="text" name="nama_pel_cs" id="nama" class="form-control"
                                                    required>
                                            </div>
                                            <!-- no telepon -->
                                            <div class="mb-3">
                                                <label for="no-telp" class="form-label">No Telepon</label>
                                                <input type="number" name="no_telp_cs" id="no-telp" class="form-control"
                                                    required>
                                            </div>
                                            <!-- alamat -->
                                            <div class="mb-3">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <textarea name="alamat_cs" id="alamat" class="form-control"
                                                    required></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <!-- pilih paket -->
                                            <div class="mb-3">
                                                <label for="pilih_paket" class="form-label">Pilih Paket</label>
                                                <select name="jenis_paket_cs" id="pilih_paket" class="form-select">
                                                    <option selected>- Pilih Jenis Paket -</option>
                                                    <option value="1">Cuci Komplit Reguler</option>
                                                    <option value="2">Cuci Komplit Kilat</option>
                                                    <option value="3">Cuci Komplit Express</option>
                                                </select>
                                            </div>
                                            <!-- berat -->
                                            <div class="mb-3">
                                                <label for="kuantitas" class="form-label">Berat</label>
                                                <div class="input-group">
                                                    <input type="number" name="berat_qty_cs" id="kuantitas"
                                                        class="form-control" required>
                                                    <span class="input-group-text">Kilogram</span>
                                                </div>
                                            </div>
                                            <!-- tanggal order masuk -->
                                            <div class="mb-3">
                                                <label for="tgl_order_msk" class="form-label">
                                                    Tanggal Order Masuk
                                                </label>
                                                <input type="date" name="tgl_masuk_cs" id="tgl_order_msk"
                                                    class="form-control" required>
                                            </div>
                                            <!-- tanggal order keluar -->
                                            <div class="mb-3">
                                                <label for="tgl_order_klr" class="form-label">
                                                    Tanggal Order Keluar
                                                </label>
                                                <input type="date" name="tgl_keluar_cs" id="tgl_order_klr"
                                                    class="form-control" required>
                                            </div>
                                            <!-- keterangan -->
                                            <div class="mb-3">
                                                <label for="ket" class="form-label">Keterangan</label>
                                                <textarea name="keterangan_cs" id="ket" class="form-control"></textarea>
                                            </div>

                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Tambah Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- END: form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- END: order cuci satuan -->