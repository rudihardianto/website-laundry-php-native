<?php require_once '../_header.php';?>

<!-- START: menu -->
<section id="detail-order-ck" class="detail-order-ck my-3 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <!-- title -->
            <div class="col col-md-10 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h5 class="card-title fw-bold">Update Data Karyawan</h5>
                            </div>
                            <div class="col text-end text-nowrap">
                                <a href="<?=url('karyawan/index.php');?>"
                                    class="btn btn-sm btn-outline-secondary">Kembali</a>
                            </div>
                        </div>
                        <hr>

                        <!-- START: form update data karyawan -->
                        <div class="row justify-content-center">
                            <div class="col col-md-10">
                                <form action="" method="post">
                                    <input type="hidden" name="level" value="">
                                    <input type="hidden" name="id_user" value="">
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama" id="nama" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="username" id="username" class="form-control"
                                                value="">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-3 col-form-label">Email address</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" id="email" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password" id="password" class="form-control"
                                                value="">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" name="submit" class="btn btn-primary">Update Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END: form update data karyawan -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: menu -->