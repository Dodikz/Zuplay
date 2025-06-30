<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-Panel</title>
    
    <!-- ICONS CSS -->
    <link href="{{ asset('build/assets/icon-fonts/icons.css') }}" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('build/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Node Waves Css -->
    <link href="{{ asset('build/assets/libs/node-waves/waves.min.css') }}" rel="stylesheet">

    <!-- Simplebar Css -->
    <link href="{{ asset('build/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

    <!-- FlatPickr CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/flatpickr/flatpickr.min.css') }}">

    <!-- AutoComplete CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/@tarekraafat/autocomplete.js/css/autoComplete.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Prism CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/prismjs/themes/prism-coy.min.css') }}">
</head>

<body>
    <!-- Header Include -->
    @include('layouts.admins.header')
    
    <!-- Sidebar Include -->
    @include('layouts.admins.sidebar')
    
    <!-- Main Content -->
    <div class="main-content app-content">
        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </div>

    <!-- Footer Include -->
    @include('layouts.admins.footer')

    <!-- Scroll to Top -->
    <div class="scrollToTop">
        <span class="arrow lh-1"><i class="ri-rocket-line align-middle fs-18"></i></span>
    </div>
    
    <!-- Responsive Overlay -->
    <div id="responsive-overlay"></div>

    <!-- JavaScript Dependencies -->
    <!-- Bootstrap JS -->
    <script src="{{ asset('build/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Node Waves JS -->
    <script src="{{ asset('build/assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('build/assets/libs/simplebar/simplebar.min.js') }}"></script>

    <!-- Choices JS -->
    <script src="{{ asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Auto Complete JS -->
    <script src="{{ asset('build/assets/libs/@tarekraafat/autocomplete.js/autoComplete.min.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('build/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- Date & Time Picker JS -->
    <script src="{{ asset('build/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- Prism JS -->
    <script src="{{ asset('build/assets/libs/prismjs/prism.js') }}"></script>

    <!-- Custom JS Files -->
    <script src="{{ asset('build/assets/sticky.js') }}"></script>
    <script src="{{ asset('build/assets/main.js') }}"></script>

    <!-- Module Scripts (ES6) -->
    <script type="module" src="{{ asset('build/assets/prism-custom-DndhZ9SR.js') }}"></script>
    <script type="module" src="{{ asset('build/assets/alerts-VX6Vd5Ax.js') }}"></script>
    <script type="module" src="{{ asset('build/assets/custom-switcher-BPpnqd5N.js') }}"></script>
    <script type="module" src="{{ asset('build/assets/simplebar-B35Aj-bA.js') }}"></script>
    {{-- <script type="module" src="{{ asset('build/assets/app-DG23iWVN.js') }}"></script> --}}

</body>

</html>