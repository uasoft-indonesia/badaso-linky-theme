<!doctype html>
<html>

<head>
    @include('linky-theme::components.linky-header')
</head>

<body>
    <div x-data="loadDataContent()" x-init="loadLandingPage()">
        <div class="bg-blue-400 min-h-screen font-karla">
            <div class="container mx-auto max-w-[1280px] px-4">
                @yield('mainContent')

            </div>

            <div class="flex justify-center  space-x-2 pb-10">
                <span class="text-base text-center text-slate-200">© Copyright 2022 | Linky Theme by
                    UASOFT | All Rights Reserved | Powered by UASOFT</span>
            </div>
        </div>
    </div>


</body>

</html>
