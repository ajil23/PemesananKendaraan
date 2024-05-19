<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Email & Password 

Saya menggunakan seeder pada sistem ini untuk memudahkan pengguna saat melakukan login. Untuk menjalankan seeder yang sudah dibuat anda dapat menggunakan perintah

```
php artisan db:seed
```

Kemudian untuk dapat melakukan login anda dapat menggunakan email dan password berikut
```
email : admin@email.com
pass  : admin123

email : manager@email.com
pass  : manager123

email : director@email.com
pass  : director123

```

## Information
```
Mysql version : 8.0.30
PHP version : 8.3.4
Framework : Laravel, Tailwind
```

<img src="erd.png" alt="ERD">

<img src="Diagram.png" alt="activity">

## Guide
A. Admin
1. Login sebagai admin
2. Input data kendaraaan melalui halaman "Kendaraan" dan tekan tombol plus, jika data sudah terisi klik simpan
3. Input data driver melalui halaman "Driver" dan tekan tombol plus, jika data sudah terisi klik simpan
4. Input data pemesanan melalui halaman "Pemesanan" dan tekan tombol plus, jika data sudah terisi klik simpan

B. Manager
1. Login sebagai manager
2. Masuk ke halaman "Pemesanan", klik tombol "Lihat" kemudian rubah status yang awalnya "Diajukan" menjadi "Terima" atau "Tolak"

C. Director
1. Login sebagai director
2. Masuk ke halaman "Pemesanan", klik tombol "Lihat" kemudian rubah status yang awalnya "Diajukan" menjadi "Terima" atau "Tolak"