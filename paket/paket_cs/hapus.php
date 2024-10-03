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
$id_cs = $_GET['id_cs'];

if (delete_cs($id_cs) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location='http://dry_laundry.test/paket/paket_cs/index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location='http://dry_laundry.test/paket/paket_cs/index.php';
        </script>
";
}
?>