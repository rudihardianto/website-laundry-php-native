<?php
require_once '../../_header.php';
if (!isset($_SESSION['login'])) {
    echo "
    <script>
        document.location='http://dry_laundry.test';
    </script>
    ";
    exit();
}
$id_ck = $_GET['id_ck'];

if (delete_ck($id_ck) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location='http://dry_laundry.test/paket/paket_ck/index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location='http://dry_laundry.test/paket/paket_ck/index.php';
        </script>
";
}
?>