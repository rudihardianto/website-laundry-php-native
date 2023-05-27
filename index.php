<?php require_once '_header.php';?>

<!-- START: welcome -->
<section id="welcome" class="main-welcome my-4">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col">
                <div>Selamat datang, <span class="fw-bold">Admin</span></div>
                <h2>Dashboard</h2>
            </div>
            <div class="col text-end">
                <button type="submit" class="btn btn-primary">+ Tambah Pesanan</button>
            </div>
        </div>
    </div>
</section>
<!-- END: welcome -->

<!-- START: menu -->
<section id="menu" class="main-menu my-3">
    <div class="container">
        <div class="row">
            <!-- karyawan -->
            <div class="col-md-4 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col">
                                <p>Jumlah Karyawan</p>
                                <h5 class="card-title fw-bold">10</h5>
                            </div>
                            <div class="col text-end">
                                <img src="_assets/img/team.png" alt="" width="70">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- total order -->
            <div class="col-md-4 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col">
                                <p>Total Order</p>
                                <h5 class="card-title fw-bold">10</h5>
                            </div>
                            <div class="col text-end">
                                <img src="_assets/img/total_order.png" alt="" width="70">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- jumlah paket -->
            <div class="col-md-4 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col">
                                <p>Jumlah Paket Tersedia</p>
                                <h5 class="card-title fw-bold">10</h5>
                            </div>
                            <div class="col text-end">
                                <img src="_assets/img/jumlah_paket.png" alt="" width="70">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: menu -->

<!-- START: order cuci komplit -->
<section id="order-cuci-komplit" class="main-order-cuci-komplit my-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Cuci Komplit</h5>
                        <hr>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">#</th>
                                        <th scope="col">No Order</th>
                                        <th scope="col">Tanggal Order</th>
                                        <th scope="col">Nama Pelanggan</th>
                                        <th scope="col">Jenis Paket</th>
                                        <th scope="col">Waktu Kerja</th>
                                        <th scope="col">Berat (KG)</th>
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
                                        <td>
                                            <a href="">
                                                <button type="button" class="btn btn-primary btn-sm">Detail</button>
                                            </a>
                                            <a href="">
                                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
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
                                        <td>
                                            <a href="">
                                                <button type="button" class="btn btn-primary btn-sm">Detail</button>
                                            </a>
                                            <a href="">
                                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
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
                                        <td>
                                            <a href="">
                                                <button type="button" class="btn btn-primary btn-sm">Detail</button>
                                            </a>
                                            <a href="">
                                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
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
<!-- END: order cuci komplit -->

<!-- START: order cuci komplit -->
<section id="order-dry-clean" class="main-order-dry-clean my-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Dry Clean (Cuci Kering)</h5>
                        <hr>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">#</th>
                                        <th scope="col">No Order</th>
                                        <th scope="col">Tanggal Order</th>
                                        <th scope="col">Nama Pelanggan</th>
                                        <th scope="col">Jenis Paket</th>
                                        <th scope="col">Waktu Kerja</th>
                                        <th scope="col">Berat (KG)</th>
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
                                        <td>
                                            <a href="">
                                                <button type="button" class="btn btn-primary btn-sm">Detail</button>
                                            </a>
                                            <a href="">
                                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
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
                                        <td>
                                            <a href="">
                                                <button type="button" class="btn btn-primary btn-sm">Detail</button>
                                            </a>
                                            <a href="">
                                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
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
                                        <td>
                                            <a href="">
                                                <button type="button" class="btn btn-primary btn-sm">Detail</button>
                                            </a>
                                            <a href="">
                                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
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
<!-- END: order cuci komplit -->

<!-- START: order satuan -->
<section id="order-satuan" class="main-order-satuan my-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Satuan</h5>
                        <hr>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">#</th>
                                        <th scope="col">No Order</th>
                                        <th scope="col">Tanggal Order</th>
                                        <th scope="col">Nama Pelanggan</th>
                                        <th scope="col">Jenis Paket</th>
                                        <th scope="col">Waktu Kerja</th>
                                        <th scope="col">Berat (KG)</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="8" class="text-center">Data Tidak Tersedia</td>
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
<!-- END: order satuan -->

<?php require_once '_footer.php';?>