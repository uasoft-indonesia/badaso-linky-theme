---
sidebar_position: 2
---

# Override View

To override the view, you can follow the following steps:

- You must run the theme setup first by running the `php artisan badaso-linky-theme:setup` command.

- A folder named `linky-theme` will be created in the `resources/view/badaso/theme/page` folder.

- Inside the `linky-theme` folder, there will be a folder named `pages`. Create a .php file inside the `pages` folder with the same name as the page. For example, if you want to override the `landing-page` page, you can create a `landing-page.blade.php` file in the `pages` folder.
  
- You can see the available page that can be overridden in the `vendor/badaso/linky-theme/src/resources/view/pages` file.
