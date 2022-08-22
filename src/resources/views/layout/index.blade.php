<!doctype html>
<html data-theme="light">

<head>
@include('landy-theme::components.landy-header')

</head>

<body>
 <div x-data="loadDataContent()" x-init="loadLandingPage()">
        <div class="drawer drawer-end">
            <input id="my-drawer-sidebar" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content font-inter">
                <!-- Page content here -->
                @include('landy-theme::components.landy-navbar')
                @yield('mainContent')

            </div>
            <div class="drawer-side">
                <label for="my-drawer-sidebar" class="drawer-overlay"></label>
                @include('landy-theme::components.landy-sidebar')

            </div>

        </div>

    {{-- footer --}}
 </div>

</body>

</html>
