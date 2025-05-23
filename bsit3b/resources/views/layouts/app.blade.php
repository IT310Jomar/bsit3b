<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    {{-- <link rel="icon" type="image/png" href="/img/favicon.png"> --}}
    <title>
        Argon Dashboard 2 by Creative Tim
    </title>
   
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('argon') }}/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('argon') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    {{-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> --}}
    <link href="{{ asset('argon') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
 

    <link  href="{{ asset('argon') }}/assets/css/datatables.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    <link id="pagestyle" href="{{ asset('argon') }}/assets/css/argon-dashboard.css" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css"> --}}





</head>
<body class="{{ $class ?? '' }}">
 

    {{-- @guest
        @yield('content')
    @endguest --}}

    {{-- @auth --}}
        @if (in_array(request()->route()->getName(), ['sign-in-static', 'sign-up-static', 'login', 'register', 'recover-password', 'rtl', 'virtual-reality']))
            @yield('content')
        @else
            @if (!in_array(request()->route()->getName(), ['profile', 'profile-static']))
                <div class="min-height-300 bg-primary position-absolute w-100"></div>
            @elseif (in_array(request()->route()->getName(), ['profile-static', 'profile']))
                <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
                    <span class="mask bg-primary opacity-6"></span>
                </div>
            @endif
            @include('layouts.navbars.auth.sidenav')
                <main class="main-content border-radius-lg">
                    @yield('content')
                </main>
            @include('components.fixed-plugin')
        @endif
    {{-- @endauth --}}

    <!--   Core JS Files   -->
   
    <script src="{{ asset('argon') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('argon') }}/assets/js/datatables.min.js"></script>
    <script src="{{ asset('assets') }}/js/axios.min.js"></script>
    <script src="{{ asset('assets') }}/js/js.js"></script>
    <script src="{{ asset('argon') }}/assets/js/core/popper.min.js"></script>
    <script src="{{ asset('argon') }}/assets/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('argon') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('argon') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
   
    <script src="{{ asset('assets') }}/js/myjs.js"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('argon') }}/assets/js/argon-dashboard.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    {{-- <script scr="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script> --}}


    @stack('js');
</body>

</html>
