<?php
require_once '../_header.php';
$data_karyawan = query('SELECT * FROM master LIMIT 20 OFFSET 1');
?>

<section id="karyawan" class="main-karyawan">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <div class="container">
                <!-- START: management karyawan -->
                <div class="row d-flex justify-content-between align-items-center mb-3">
                    <div class="col">
                        <h2>Management Karyawan</h2>
                    </div>
                    <div class="col text-end">
                        <a href="<?=url('karyawan/tambah.php');?>" class="btn btn-primary">+ Tambah Karyawan</a>
                    </div>
                </div>
                <!-- END: management karyawan -->

                <!-- START: form karyawan -->
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Daftar Karyawan</h5>
                                <hr>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr class="table-primary">
                                                <th scope="col">#</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;?>
                                            <?php foreach ($data_karyawan as $karyawan): ?>
                                            <tr>
                                                <th scope="row"><?=$no++;?></th>
                                                <td><?=$karyawan['nama']?></td>
                                                <td><?=$karyawan['username']?></td>
                                                <td><?=$karyawan['email']?></td>
                                                <td>
                                                    <a
                                                        href="<?=url('karyawan/edit.php');?>?id_user=<?=$karyawan['id_user']?>"><button
                                                            type="button" class="btn btn-primary btn-sm">Edit</button>
                                                    </a>
                                                    <a
                                                        href="<?=url('karyawan/hapus.php')?>?id_user=<?=$karyawan['id_user']?>">
                                                        <button type="button"
                                                            onclick="return confirm('Yakin ingin menghapus?');"
                                                            class="btn btn-danger btn-sm">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: form karyawan -->
            </div>
        </div>
    </div>
</section>

<?php require_once '../_footer.php'; ?>