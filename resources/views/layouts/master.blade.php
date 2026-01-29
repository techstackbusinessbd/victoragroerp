<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light" data-menu-color="dark"
    data-topbar-color="light" data-sidenav-size="default">

<head>
    {{-- Meta --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title', config('app.name') . ' | Dashboard')
    </title>

    {{-- CSRF --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.partials.head')
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- Sidenav Menu Start -->
        @include('layouts.partials.sidenav')
        <!-- Sidenav Menu End -->

        <!-- Topbar Start -->
        @include('layouts.partials.header')
        <!-- Topbar End -->



        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- container -->

            <!-- Footer Start -->
            @include('layouts.partials.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    @include('layouts.partials.theme-setting')

    <!-- Vendor js -->
    @include('layouts.partials.script')
</body>

</html>
