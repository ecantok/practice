<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/bootstrap-icons-1.7.2/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>{{ $title }} | Penembak Jitu</title>
</head>

<body>

    @include('partials.navbar')

    <div class="container mt-5">
        @yield('container')
    </div>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}">
    </script>

</body>

</html>
