---
sidebar_position: 2
---

# Override View

Untuk mengganti tampilan, Anda dapat mengikuti langkah-langkah berikut:

- Anda harus menjalankan pengaturan tema terlebih dahulu dengan menjalankan perintah `php artisan badaso-linky-theme:setup`.

- Folder bernama `linky-theme` akan dibuat di folder `resources/view/badaso/theme/page`.

- Di dalam folder `linky-theme`, akan ada folder bernama `pages`. Buat file .php di dalam folder `pages` dengan nama yang sama dengan halaman. Misalnya, jika Anda ingin mengganti halaman `landing-page`, Anda dapat membuat file `landing-page.blade.php` di folder `pages`.
  
- Anda dapat melihat halaman yang tersedia yang dapat diganti di file `vendor/badaso/linky-theme/src/resources/view/pages`.

