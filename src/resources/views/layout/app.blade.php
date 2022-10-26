<!doctype html>
<html>

<head>
    @include('linky-theme::components.linky-header')
</head>

<body>
    <div class="splash">
        <progress class="progress progress-info  w-56"></progress>
    </div>
    <div x-data="loadDataContent()" x-init="loadLandingPage()">
        <div class="bg-blue-400 min-h-screen font-karla">
            <div class="container mx-auto max-w-[1280px] px-4">
                @yield('mainContent')

            </div>

            <div class="flex justify-center  space-x-2 pb-10">
                <span class="text-base text-center text-slate-200" x-html="copyright"></span>
            </div>
        </div>
    </div>

<div x-data="loadDataContent()" x-init="loadDataConfiguration()"></div>
</body>

</html>
