<?php
require_once '../../_header.php';
$id_ck = $_GET['id_ck'];

if (delete_ck($id_ck) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location='http://localhost/laundry_rizal_skripsi/paket/paket_ck/index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location='http://localhost/laundry_rizal_skripsi/paket/paket_ck/index.php';
        </script>
";
}
?>