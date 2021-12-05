<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Innova</title>

    {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/admin/bootstrap.css") }}">

    <link rel="stylesheet" href={{ asset("vendors-admin/iconly/bold.css") }}>

    <link rel="stylesheet" href={{ asset("vendors-admin/perfect-scrollbar/perfect-scrollbar.css") }}>
    <link rel="stylesheet" href={{ asset("vendors-admin/bootstrap-icons/bootstrap-icons.css") }}>
    <link rel="stylesheet" href={{ asset("css/admin/app.css") }}>
    {{-- <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon"> --}}
</head>
<body>
    <div id="app">
        @include('partials.nav')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                @yield('title-page')
            </div>
            <div class="page-content">
                @yield('content')
            </div>

        </div>
    </div>
    
    <script src={{ asset("vendors-admin/perfect-scrollbar/perfect-scrollbar.min.js") }}></script>
    <script src={{ asset("js/admin/bootstrap.bundle.min.js") }}></script>
    {{-- <script src={{ asset("vendors-admin/apexcharts/apexcharts.js") }}></script> --}}
    <script src={{ asset("js/admin/pages/dashboard.js") }}></script>
    <script src={{ asset("js/admin/main.js") }}></script>
</body>

</html>