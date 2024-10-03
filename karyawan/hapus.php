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
$id_user = $_GET['id_user'];

if (delete_karyawan($id_user) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location='http://dry_laundry.test/karyawan/index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location='http://dry_laundry.test/karyawan/index.php';
        </script>
";
}
?>