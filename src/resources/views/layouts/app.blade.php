<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - DocVerifica</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <style>
        .search-box {
            z-index: 2;
        }

        .bg-image {
            background-image: url('https://www.chetu.com/img/custom-api-development-services/custom-api-development-services-banner.jpg');
            background-position: left center;
            height: 800px;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .border-light {
            background-color: #f5f5f5 !important;
            border-bottom: 1px solid #CCC !important;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card-body i {
            font-size: 3rem;
            color: #03285e;
        }
        .title-box {
            z-index: 3;
        }
    </style>
</head>
<body>
@include('partials.header')
<main>
    @yield('content')
</main>
@include('partials.footer')
</body>
</html>
