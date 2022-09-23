---
sidebar_position: 1
---

# Override Controller

Untuk mengganti controller, Anda dapat mengikuti langkah-langkah berikut:

- Buat pengontrol baru dengan menggunakan perintah di bawah ini.

`php artisan make:controller ExampleController`

- Setelah pengontrol baru dibuat, Anda dapat mengganti pengontrol dengan mendaftarkan pengontrol di file `config/badaso-landy-theme.php` di bagian `controllers`. Sebagai contoh:

```php
kembali [
     ...,

     'pengontrol' => [
         'ExampleController' => 'App\Http\Controllers\ExampleController',
     ],
];
```

- Anda dapat melihat kunci penggantian yang tersedia di file `vendor/badaso/landy-theme/src/Routes/api.php`.

Catatan: Semua pengontrol di Tema Landy adalah pengontrol yang dipanggil.
