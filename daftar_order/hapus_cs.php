<?php
require_once '../_header.php';
$cs_number = $_GET['or_cs_number'];

if (del_or_cs($cs_number) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location='http://localhost/laundry_rizal_skripsi/';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location='http://localhost/laundry_rizal_skripsi/';
        </script>
";
}
?>