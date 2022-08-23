<!doctype html>
<html>

<head>
  @include('linky-theme::components.linky-header')
</head>

<body>
    <div x-data="loadDataContent()" x-init="loadLandingPage()">
    <div class="bg-black min-h-screen">
        <div class="container mx-auto max-w-[1280px] px-4">
          @yield('mainContent')

        </div>
    </div>
     </div>
</body>

</html>
