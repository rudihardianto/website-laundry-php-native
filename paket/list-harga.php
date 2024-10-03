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
    $data_ck = query('SELECT * FROM tb_cuci_komplit');
    $data_dc = query('SELECT * FROM tb_dry_clean');
    $data_cs = query('SELECT * FROM tb_cuci_satuan');
?>

<!-- START: list harga -->
<section id="list-harga" class="list-harga">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-10 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Daftar Harga</h5>
                        <hr>

                        <!-- harga cuci komplit -->
                        <div class="row my-3">
                            <div class="col">
                                <p class="fw-semibold"># Harga Cuci Komplit</p>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-sm table-hover">
                                        <thead>
                                            <tr class="table-primary">
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Paket</th>
                                                <th scope="col">Waktu Kerja</th>
                                                <th scope="col">Berat Min</th>
                                                <th scope="col">Tarif</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;?>
                                            <?php foreach ($data_ck as $ck): ?>
                                            <tr>
                                                <td><?=$no++;?></td>
                                                <td><?=$ck["nama_paket_ck"];?></td>
                                                <td><?=$ck["waktu_kerja_ck"];?></td>
                                                <td><?=$ck["kuantitas_ck"].' Kg';?></td>
                                                <td><?=$ck["tarif_ck"];?></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- harga dry clean -->
                        <div class="row my-3">
                            <div class="col">
                                <p class="fw-semibold"># Harga Dry Clean</p>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-sm table-hover">
                                        <thead>
                                            <tr class="table-primary">
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Paket</th>
                                                <th scope="col">Waktu Kerja</th>
                                                <th scope="col">Berat Min</th>
                                                <th scope="col">Tarif</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;?>
                                            <?php foreach ($data_dc as $dc): ?>
                                            <tr>
                                                <td><?=$no++;?></td>
                                                <td><?=$dc["nama_paket_dc"];?></td>
                                                <td><?=$dc["waktu_kerja_dc"];?></td>
                                                <td><?=$dc["kuantitas_dc"].' Kg';?></td>
                                                <td><?=$dc["tarif_dc"];?></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- harga cuci satuan -->
                        <div class="row my-3">
                            <div class="col">
                                <p class="fw-semibold"># Harga Cuci Satuan</p>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-sm table-hover">
                                        <thead>
                                            <tr class="table-primary">
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Paket</th>
                                                <th scope="col">Waktu Kerja</th>
                                                <th scope="col">Berat Min</th>
                                                <th scope="col">Tarif</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;?>
                                            <?php foreach ($data_cs as $cs): ?>
                                            <tr>
                                                <td><?=$no++;?></td>
                                                <td><?=$cs['nama_cs'];?></td>
                                                <td><?=$cs['waktu_kerja_cs'];?></td>
                                                <td><?=$cs['kuantitas_cs'].' Kg';?></td>
                                                <td><?=$cs['tarif_cs'];?></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: list harga -->

<?php require_once '../_footer.php';?>