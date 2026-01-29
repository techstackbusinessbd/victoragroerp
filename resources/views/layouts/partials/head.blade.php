    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Datatables css -->
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css">

    {{-- Theme Config (required before css) --}}
    <script src="{{ asset('assets/js/config.js') }}"></script>

    {{-- Vendor CSS --}}
    <link href="{{ asset('assets/css/vendors.min.css') }}" rel="stylesheet">

    {{-- App CSS --}}
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- SweetAlert2 CSS (optional, default bundled) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    {{-- Page Level CSS --}}
    @stack('css')
