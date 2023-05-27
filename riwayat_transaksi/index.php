<?php require_once '../_header.php';?>

<!-- START: title daftar riwayat transaksi -->
<section id="daftar-riwayat-transaksi" class="daftar-riwayat-transaksi my-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h2>Daftar Riwayat Transaksi</h2>
            </div>
        </div>
    </div>
</section>
<!-- END: title daftar riwayat transaksi -->

<!-- START: daftar transaksi cuci komplit -->
<section id="daftar-transaksi-ck" class="daftar-transaksi-ck my-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Transaksi - Cuci komplit</h5>
                        <hr>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">No. Order</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Paket</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Uang Bayar</th>
                                        <th scope="col">Uang Kembalian</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>
                                            <a href="<?=url('riwayat_transaksi/riwayat_ck/detail_ck.php');?>">
                                                <button type="submit" class="btn btn-primary btn-sm">Detail</button>
                                            </a>
                                            <a href="<?=url('riwayat_transaksi/riwayat_ck/cetak_info.php');?>">
                                                <button type="submit" class="btn btn-secondary btn-sm">
                                                    Cetak Bukti
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>
                                            <a href="<?=url('riwayat_transaksi/riwayat_ck/detail_ck.php');?>">
                                                <button type="submit" class="btn btn-primary btn-sm">Detail</button>
                                            </a>
                                            <a href="<?=url('riwayat_transaksi/riwayat_ck/cetak_info.php');?>">
                                                <button type="submit" class="btn btn-secondary btn-sm">Cetak
                                                    Bukti</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry the Bird</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>
                                            <a href="<?=url('riwayat_transaksi/riwayat_ck/detail_ck.php');?>">
                                                <button type="submit" class="btn btn-primary btn-sm">Detail</button>
                                            </a>
                                            <a href="<?=url('riwayat_transaksi/riwayat_ck/cetak_info.php');?>">
                                                <button type="submit" class="btn btn-secondary btn-sm">Cetak
                                                    Bukti</button>
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
    </div>
</section>
<!-- END: daftar transaksi cuci komplit -->

<!-- START: daftar transaksi dry clean -->
<section id="daftar-transaksi-dc" class="daftar-transaksi-dc my-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Transaksi - Dry Clean</h5>
                        <hr>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">No. Order</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Paket</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Uang Bayar</th>
                                        <th scope="col">Uang Kembalian</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>
                                            <a href="<?=url('riwayat_transaksi/riwayat_dc/detail_dc.php');?>">
                                                <button type="submit" class="btn btn-primary btn-sm">Detail</button>
                                            </a>
                                            <a href="<?=url('riwayat_transaksi/riwayat_dc/cetak_info.php');?>">
                                                <button type="submit" class="btn btn-secondary btn-sm">Cetak
                                                    Bukti</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                        <td>
                                            <a href="<?=url('riwayat_transaksi/riwayat_dc/detail_dc.php');?>">
                                                <button type="submit" class="btn btn-primary btn-sm">Detail</button>
                                            </a>
                                            <a href="<?=url('riwayat_transaksi/riwayat_dc/cetak_info.php');?>">
                                                <button type="submit" class="btn btn-secondary btn-sm">Cetak
                                                    Bukti</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry the Bird</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                        <td>
                                            <a href="<?=url('riwayat_transaksi/riwayat_dc/detail_dc.php');?>">
                                                <button type="submit" class="btn btn-primary btn-sm">Detail</button>
                                            </a>
                                            <a href="<?=url('riwayat_transaksi/riwayat_dc/cetak_info.php');?>">
                                                <button type="submit" class="btn btn-secondary btn-sm">Cetak
                                                    Bukti</button>
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
    </div>
</section>
<!-- END: daftar transaksi dry clean -->

<!-- START: daftar transaksi cuci satuan -->
<section id="daftar-transaksi-cs" class="daftar-transaksi-cs my-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Transaksi - Cuci Satuan</h5>
                        <hr>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">No. Order</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Paket</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Uang Bayar</th>
                                        <th scope="col">Uang Kembalian</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="10" class="text-center">Data Tidak Tersedia</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: daftar transaksi cuci satuan -->

<?php require_once '../_footer.php'?>