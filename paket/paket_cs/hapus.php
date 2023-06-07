<?php
require_once '../../_header.php';
$id_cs = $_GET['id_cs'];

if (delete_cs($id_cs) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location='http://localhost/laundry_rizal_skripsi/paket/paket_cs/index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location='http://localhost/laundry_rizal_skripsi/paket/paket_cs/index.php';
        </script>
";
}
?>