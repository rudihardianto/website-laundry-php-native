<?php require_once '_header.php';?>

<section id="login" class="login my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-4">
                <div class="card">
                    <div class="text-center mt-4">
                        <img src="<?=url('_assets/img/logo/dry_dry.png')?>" alt="" width="75">
                        <h5 class="fw-bold my-4">Daftar Akun Baru</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="username" autocomplete="off"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" autocomplete="off"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    autocomplete="off" required>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '_footer.php';?>