---
sidebar_position: 3
---

# Alternatif Konfigurasi Google Analytics

Alternatif konfigurasi ini digunakan ketika hit google analytics tidak berjalan pada tema badaso linky.

1. Di `.env` tambahkan konfigurasi baru pada kunci `MIX_ANALYTICS_TRACKING_ID`
2. Dalam `resources/views` buat folder bernama `partials`
3. Pada folder resources/views/partials buat file blade dengan nama google-analytics.blade.php dengan isi sebagai berikut:

```php
@php
$measurement_id = env('MIX_ANALYTICS_TRACKING_ID', null);
// output : UA-2155XXXXX-X
@endphp

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="{{ "https://www.googletagmanager.com/gtag/js?id={$measurement_id}" }}"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', '{{ $measurement_id }}');
</script>

<script>
    // record location analytics
    let href = window.location.href
    setInterval(() => {
        let listenHref = window.location.href
        if (listenHref != href) {
            let page_title = document.title
            let {
                href: page_location,
                pathname: page_path
            } = window.location
            let configurationSet = {
                page_title,
                page_location,
                page_path,
            }

            gtag('config', '{{ $measurement_id }}', configurationSet);

            href = listenHref
        }
    }, 1000);
</script>

```

4. Didalam `resources/views` buat folder baru bernama `vendor/linky-theme`
5. Salin file `vendor/badaso/linky-theme/src/resources/layout/app.blade.php` ke folder `resources/views/vendor/linky-theme`
6. Panggil `resources/views/partials/google-analytics.blade.php` in `resources/views/vendor/linky-theme/app.blade.php`

```php
<!DOCTYPE html>
<html lang="en">

<head>
  ...

  <!-- Google Analytics -->
  @include('partials.google-analytics')
  <!-- End Google Analytics -->

  ...

</head>
...
</html>
```




