---
sidebar_position: 1
---

# Installation

1. Anda bisa menginstal tema landy dengan mengikuti perintah berikut.

```
composer require badaso/landy-theme
```

2. (Pilihan) Jalankan perintah berikut untuk mengatur badaso-core. Jika Anda tidak pernah menjalankannya sebelumnya.

```
php artisan badaso:setup
```
3. (Pilihan) Jalankan perintah berikut untuk mengatur badaso-content. Jika Anda tidak pernah menjalankannya sebelumnya.

```
php artisan badaso-content:setup
```

4. (Optional) Jalankan perintah berikut untuk mengatur badaso-post. Jika Anda tidak pernah menjalankannya sebelumnya.

```
php artisan badaso-post:setup
```

5. Jalankan perintah berikut untuk mengatur tema

```
php artisan badaso-landy-theme:setup
```

6. Jalankan perintah berikut untuk migrate database.

```
php artisan migrate
```

7. (Pilihan) Jalankan perintah berikut untuk generate seeder dari badaso core, content module dan post module. Jika Anda tidak pernah menjalankannya sebelumnya.

```
php artisan db:seed --class="Database\Seeders\Badaso\BadasoSeeder"

php artisan db:seed --class="Database\Seeders\Badaso\Post\BadasoPostModuleSeeder"

php artisan db:seed --class="Database\Seeders\Badaso\Content\BadasoContentModuleSeeder"
```

8. Jalankan perintah berikut untuk generate seeder dari Landy theme.

```
php artisan db:seed --class='Database\Seeders\Badaso\LandyTheme\BadasoLandyThemeSeeder'
```

9. Tambahkan plugins pada MIX_POST_URL_PREFIX untuk .env.

```
MIX_BADASO_PLUGINS=content-module,post-module,landy-theme
```

10. Tambahkan menu plugins  ke MIX_BADASO_MENU anda pada .env.Jika anda memiliki menu lain, tambahkan mereka setelah koma (,).
```
MIX_BADASO_MENU=${MIX_DEFAULT_MENU},content-module,post-module,landy-theme
```

11. Install JS depedency
```
   npm install
```

12. Bangun JS dependency.
```
 npm run watch
```

13. Selesai. Anda bisa mengakses tema landy
```
http://localhost:8000/landy
```

