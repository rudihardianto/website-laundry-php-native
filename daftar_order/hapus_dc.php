<?php
require_once '../_header.php';
$dc_number = $_GET['or_dc_number'];

if (del_or_dc($dc_number) > 0) {
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