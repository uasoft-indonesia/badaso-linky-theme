 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div x-data="loadDataContent()" x-init="loadDataConfiguration()">
    <title x-text="navbartitle"></title>
    </div>
    <link href="{{ mix('css/linky-theme.css') }}" rel="stylesheet">
    <script src="{{ mix('js/index/linky-theme.js') }}" defer></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">

    @php
     $measurement_id = env('MIX_ANALYTICS_TRACKING_ID', null);
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
 <!-- End Google Analytics -->

