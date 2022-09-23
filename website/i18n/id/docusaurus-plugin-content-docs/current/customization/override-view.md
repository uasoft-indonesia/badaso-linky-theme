---
sidebar_position: 2
---

# Override View

Untuk mengganti tampilan, Anda dapat mengikuti langkah-langkah berikut:

- Anda harus menjalankan pengaturan tema terlebih dahulu dengan menjalankan perintah `php artisan badaso-landy-theme:setup`.

- Folder bernama `landy-theme` akan dibuat di folder `resources/js/badaso/theme`.

- Di dalam folder `landy-theme`, akan ada folder bernama `pages`. Buat file .vue di dalam folder `pages` dengan nama yang sama dengan halaman. Misalnya, jika Anda ingin mengganti halaman `home`, Anda dapat membuat file `home.vue` di folder `pages`.
  
- Anda dapat melihat halaman yang tersedia yang dapat diganti di file `vendor/badaso/landy-theme/src/resources/app/pages/`.
