---
sidebar_position: 1
---

# Override Controller

Untuk mengganti pengontrol, Anda dapat mengikuti langkah-langkah berikut:

- Buat pengontrol baru dengan menggunakan perintah di bawah ini.

`php artisan make:controller ExampleController`

- Setelah pengontrol baru dibuat, Anda dapat mengganti pengontrol dengan mendaftarkan pengontrol di file `config/badaso-linky-theme.php` di bagian `controllers`. Sebagai contoh:

```php
return [
    ...,

    'controllers' => [
        'ExampleController' => 'App\Http\Controllers\ExampleController',
    ],
];
```

Catatan: Semua pengontrol di Tema linky adalah pengontrol yang dipanggil.
