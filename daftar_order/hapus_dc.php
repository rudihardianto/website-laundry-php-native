<?php
require_once '../_header.php';

$dc_number = $_GET['or_dc_number'];

if (deleteDc($dc_number) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location='http://dry_laundry.test';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location='http://dry_laundry.test';
        </script>
";
}
?>