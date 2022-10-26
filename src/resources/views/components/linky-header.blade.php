 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link id="favicon" rel="shortcut icon" href="favicon.ico" type="image/x-icon">
 <title>@yield('title')</title>
 <link href="{{ mix('css/linky-theme.css') }}" rel="stylesheet">
 <script src="{{ mix('js/linky-theme.js') }}" defer></script>
 <script src="{{ mix('js/index/linky-theme.js') }}" defer></script>
 <script src="http://maps.googleapis.com/maps/api/js"></script>
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">

 <style>
  .splash {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: black;
            z-index: 200;
            color: white;
            text-align: center;
            line-height: 90vh;

        }

        .splash.display-none {
            position: fixed;
            opacity: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: black;
            z-index: -10;
            color: white;
            text-align: center;
            line-height: 90vh;
            transition: all 0.5s;

        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn 1s ease-in forwards;
        }
 </style>
