---
sidebar_position: 1
---

# Installation

1. Anda dapat menginstal tema linky dengan perintah berikut.

    ```
    composer require badaso/linky-theme
    ```

1. (Opsional) Jalankan perintah berikut untuk menyiapkan file badaso-core. Jika Anda tidak pernah menjalankannya sebelumnya.

    ```
    php artisan badaso:setup
    ```
1. (Opsional) Jalankan perintah berikut untuk mengatur badaso-content. Jika Anda tidak pernah menjalankannya sebelumnya.

    ```
    php artisan badaso-content:setup
    ```

1. Jalankan perintah berikut untuk mengatur tema

    ```
    php artisan badaso-linky-theme:setup
    ```

1. Jalankan perintah berikut untuk melakukan migrasi database.

    ```
    php artisan migrate
    ```

1. (Opsional) Jalankan perintah berikut untuk menghasilkan seeder inti badaso, dan modul konten. Jika Anda tidak pernah menjalankannya sebelumnya.

    ```
    php artisan db:seed --class="Database\Seeders\Badaso\BadasoSeeder"

    php artisan db:seed --class="Database\Seeders\Badaso\Content\BadasoContentModuleSeeder"
    ```

1. Jalankan perintah untuk menghasilkan seeder tema tautan.

    ```
    php artisan db:seed --class='Database\Seeders\Badaso\LinkyTheme\BadasoLinkyThemeSeeder'
    ```

1. Tambahkan plugin ke MIX_POST_URL_PREFIX Anda ke .env.

    ```
    MIX_BADASO_PLUGINS=content-module,linky-theme
    ```

1. Tambahkan menu plugin ke MIX_BADASO_MENU Anda ke .env. Jika Anda memiliki menu lain, sertakan menu tersebut menggunakan koma pembatas (,).
    ```
    MIX_BADASO_MENU=${MIX_DEFAULT_MENU},content-module,linky-theme
    ```

1. Instal ketergantungan JS
    ```
    npm install
    ```

1. Bangun ketergantungan JS.
    ```
    npm run watch
    ```

1. Selesai. Anda dapat mengakses tema tautan
    ```
    http://localhost:8000/linky
    ```
    