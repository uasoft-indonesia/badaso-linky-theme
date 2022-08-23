---
sidebar_position: 1
---

# Installation

1. You can install the linky theme with the following command.

```
composer require badaso/linky-theme
```

2. (Optional) Run the following command to setup the badaso-core. If you never run it before.

```
php artisan badaso:setup
```
3. (Optional) Run the following command to setup the badaso-content. If you never run it before.

```
php artisan badaso-content:setup
```

4. Run the following command to setup the theme

```
php artisan badaso-linky-theme:setup
```

5. Run the following command to migrate database.

```
php artisan migrate
```

6. (Optional) Run the following command to generate seeder of badaso core, content module and post module. If you never run it before.

```
php artisan db:seed --class="Database\Seeders\Badaso\BadasoSeeder"

php artisan db:seed --class="Database\Seeders\Badaso\Content\BadasoContentModuleSeeder"
```

7. Run the command to generate seeder of linky theme.

```
php artisan db:seed --class='Database\Seeders\Badaso\LinkyTheme\BadasoLinkyThemeSeeder'
```

8. Add the plugins to your MIX_POST_URL_PREFIX to .env.

```
MIX_BADASO_PLUGINS=content-module,linky-theme
```

9. Add the plugins menu to your MIX_BADASO_MENU to .env. If you have another menu, include them using delimiter comma (,).
```
MIX_BADASO_MENU=${MIX_DEFAULT_MENU},content-module,linky-theme
```

10. Install JS depedency
```
   npm install
```

11. Build JS dependency.
```
 npm run watch
```

12. Finished. You can access the linky theme
```
http://localhost:8000/linky
```

