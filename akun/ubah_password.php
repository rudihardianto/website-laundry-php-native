<?php
    require_once '../_header.php';
    if (!isset($_SESSION['login'])) {
        echo "
        <script>
            document.location='http://localhost/laundry_rizal_skripsi/';
        </script>
        ";
        exit();
    }

    $id_user = $_SESSION["id_user"];

    if (isset($_POST["ubah_password"])) {
        // ambil semua inputan
        $old_pw = $_POST["old_password"];
        $new_pw = $_POST["new_password"];
        $cfm_pw = $_POST["confirm_password"];

        // cek apakah old password benar
        $sql = "SELECT * FROM master WHERE id_user = '".$id_user."'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_object($result);

        // cek apakah password yang diinputkan lama sama
        if (password_verify($old_pw, $row->password)) {
            // jika new password & confirm password sama
            if ($new_pw == $cfm_pw) {
                // ubah password
                $sql = "UPDATE master SET password = '".password_hash($new_pw, PASSWORD_DEFAULT)."' WHERE id_user = '".$id_user."'";
                mysqli_query($db, $sql);

                echo "
                    <script>
                        alert('Selamat, Password berhasil diubah!');
                        document.location='http://localhost/laundry_rizal_skripsi/akun/ubah_password.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('Maaf, Password baru tidak sama dengan konfirmasi password!');
                        document.location='http://localhost/laundry_rizal_skripsi/akun/ubah_password.php';
                    </script>
                ";
            }
        } else {
            echo "
                <script>
                    alert('Maaf, Password lama anda salah!');
                    document.location='http://localhost/laundry_rizal_skripsi/akun/ubah_password.php';
                </script>
            ";
        }
    }

?>

<!-- START: ubah password -->
<section id="update-password" class="update-password">
    <div class="container">
        <div class="row justify-content-center">
            <!-- title -->
            <div class="col col-md-10 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h5 class="card-title fw-bold">Ubah Password</h5>
                            </div>
                            <div class="col text-end text-nowrap">
                                <a href="<?=url();?>" class="btn btn-sm btn-outline-secondary">Kembali</a>
                            </div>
                        </div>
                        <hr>

                        <!-- START: form update password -->
                        <div class="row justify-content-center">
                            <div class="col col-md-10">
                                <form method="post" action="">
                                    <input type="hidden" name="username" value="<?= $_SESSION['username']; ?>">
                                    <div class="mb-3 row">
                                        <label for="old_password" class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="old_password" id="old_password"
                                                class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="mb-3 row">
                                        <label for="new_password" class="col-sm-3 col-form-label">New Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="new_password" id="new_password"
                                                class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="confirm_password" class="col-sm-3 col-form-label">
                                            Konfirmasi Password Baru
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="password" name="confirm_password" id="confirm_password"
                                                class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="" class="btn btn-outline-secondary">Refresh</a>

                                        <button type="submit" name="ubah_password" class="btn btn-primary">
                                            <!-- onclick="return confirm('Ingin ubah password?');" -->
                                            Ubah Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END: form update password -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: ubah password -->

<?php require_once '../_footer.php';?>