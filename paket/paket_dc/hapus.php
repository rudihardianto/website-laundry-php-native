<?php
require_once '../../_header.php';
if (!isset($_SESSION['login'])) {
    echo "
    <script>
        document.location='http://localhost/laundry_rizal_skripsi/';
    </script>
    ";
    exit();
}
$id_dc = $_GET['id_dc'];

if (delete_dc($id_dc) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location='http://localhost/laundry_rizal_skripsi/paket/paket_dc/index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location='http://localhost/laundry_rizal_skripsi/paket/paket_dc/index.php';
        </script>
";
}
?>