<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ url('backend') }}/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>POS - System</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    @section('styles')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <link href="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    @show
    @stack('styles')
    <!-- Page CSS -->
</head>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed">
    {{ $title }}
    @if (session('success'))
        <div class="success-session" data-flashdata="{{ session('success') }}"></div>
    @elseif(session('error'))
        <div class="error-session" data-flashdata="{{ session('error') }}"></div>
    @endif
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('layouts.sidebar')
            @include('layouts.navbar')
            @include('layouts.toolbar')
            <div class="h-100 d-flex align-items-center justify-content-center" id="loading-spinner">
                <div class="spinner-border spinner-border-lg fs-3 text-black fw-semibold" role="status">
                </div>
                <div class="loading-text fs-4 text-black fw-semibold ms-3">
                    Loading, please wait
                    <div class="spinner-grow" style="width: 5px; height: 5px;" role="status"></div>
                    <div class="spinner-grow" style="width: 5px; height: 5px;" role="status"></div>
                    <div class="spinner-grow" style="width: 5px; height: 5px;" role="status"></div>
                </div>
            </div>
            <div class="d-flex flex-column flex-column-fluid mb-5 d-none" id="kt_content">
                @yield('content')
            </div>

            {{-- @include('layouts.footer') --}}
        </div>
    </div>
    @include('layouts.side-right')


    @stack('modals')
    <!--Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
    </div>
    </div>
</body>
@section('scripts')
    <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('js/custom/widgets.js') }}"></script>
    <script src="{{ asset('js/custom/apps/chat/chat.js') }}"></script>
@show
@stack('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const spinner = document.getElementById('loading-spinner');
        const appContent = document.getElementById('kt_content');

        window.addEventListener('load', async () => {
            await new Promise(resolve => setTimeout(resolve, 1000));
            spinner.classList.add('d-none');
            appContent.classList.remove('d-none');
        })
    });
    let flashdatasukses = $('.success-session').data('flashdata');
    if (flashdatasukses) {
        Swal.fire({
            text: flashdatasukses,
            icon: "success",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        })
    }
    let flashdataerror = $('.error-session').data('flashdata');
    if (flashdataerror) {
        Swal.fire({
            text: flashdataerror,
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
                confirmButton: "btn btn-primary",
            }
        });
    }
    $('.price-money').on('change click keyup input paste', function(event) {
        $(this).val(function(index, value) {
            value = value.replace(/[^\d.-]/g, "");

            value = value.replace(/\.{2,}/g, ".").replace(/\.(?=.*\.)/g, "");

            if (value.includes(".")) {
                const [integer, decimal] = value.split(".");
                value = `${integer}.${decimal.substring(0, 2)}`;
            }

            return value.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        });
    });
</script>

</html>
