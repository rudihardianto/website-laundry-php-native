# dry laundry

website management laundry (php native)

# dry_laundry

**dry_laundry** adalah sebuah website management laundry yang dibangun menggunakan PHP Native.

## Fitur

-   Order Paket Laundry (Cuci Komplit, Dry Clean, Cuci satuan)
-   Riwayat Transaksi
-   List Harga
-   Mamagement Karyawan
-   Mamagement Paket

## Teknologi yang Digunakan

-   PHP
-   MySQL
-   HTML/CSS/JavaScript
-   Bootstrap (untuk tampilan responsif)
-   Datatables

## Persyaratan Sistem

-   PHP 8+
-   MySQL 8+
-   Web server (Apache/Nginx)

## Instalasi

1. Clone repositori:

    ```
    git clone https://github.com/rudihardianto/website-laundry-php-native.git
    ```

2. Impor `dry_laundry.sql` ke MySQL

3. Konfigurasi `_functions.php`:

    ```php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'username');
    define('DB_PASS', '');
    define('DB_NAME', 'dry_laundry');
    ```

4. Akses: `http://dry_laundry.test` atau `http://localhost/dry_laundry`, ubah url pada file `_functions.php` sesuai kebutuhan

## Struktur Direktori

```
dry_laundry/
├── _assets/
├── akun/
├── daftar_order/
├── detail_order/
├── karyawan/
├── order
├── paket
├── riwayat_transaksi
├── _footer.php
├── _functions.php
├── _header.php
├── about.php
└── index.php
└── login.php
└── logout.php
└── register.php
```

## Penggunaan

-   Halaman utama: home, tambah order, list order
-   Akun default admin:
    -   Username: admin
    -   Password: admin

## Kontribusi

Fork repositori dan buat pull request untuk kontribusi.

## Lisensi

[MIT License](LICENSE)

## Kontak

rud.hardianto@gmail.com
