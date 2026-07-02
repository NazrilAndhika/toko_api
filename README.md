## Setup Lengkap dari Clone sampai Bisa Dijalankan

Berikut panduan lengkap untuk menjalankan project ini di lingkungan lokal.

### 1. Clone repository

```bash
git clone <url-repository>
cd toko-api
```

### 2. Pastikan kebutuhan sistem terpenuhi

Pastikan server lokal Anda sudah memiliki:

- PHP 8.2+
- MySQL/MariaDB
- Apache atau Nginx
- Composer

Cek ekstensi PHP yang diperlukan:

- intl
- mbstring
- json
- mysqlnd
- curl

### 3. Install dependency

Jalankan perintah berikut di direktori project:

```bash
composer install
```

### 4. Buat database

Buat database MySQL/MariaDB dengan nama:

```sql
CREATE DATABASE toko_api;
```

### 5. Konfigurasi koneksi database

Buka file [app/Config/Database.php](app/Config/Database.php) lalu sesuaikan konfigurasi berikut sesuai environment Anda:

```php
'hostname' => 'localhost',
'username' => 'root',
'password' => '',
'database' => 'toko_api',
```

### 6. Jalankan migrasi database

Project ini sudah menggunakan migrasi CodeIgniter 4 untuk membuat tabel database secara otomatis.

```bash
php spark migrate
```

### 7. Jalankan seeder

Untuk mengisi data awal seperti data member, token, dan produk:

```bash
php spark db:seed DatabaseSeeder
```

### 8. Jalankan aplikasi

Jika Anda menggunakan XAMPP, arahkan browser ke:

```text
http://localhost/toko-api/public/
```

Atau jalankan server internal PHP:

```bash
php spark serve
```

Lalu buka:

```text
http://localhost:8080
```

### File yang terlibat

- Migrasi: [app/Database/Migrations/2026-07-02-120000_CreateTokoApiTables.php](app/Database/Migrations/2026-07-02-120000_CreateTokoApiTables.php)
- Seeder: [app/Database/Seeds/DatabaseSeeder.php](app/Database/Seeds/DatabaseSeeder.php)

### Jika ingin mengulang dari awal

Untuk menghapus tabel yang dibuat oleh migrasi:

```bash
php spark migrate:rollback
```

Kemudian jalankan ulang:

```bash
php spark migrate
php spark db:seed DatabaseSeeder
```
