<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="http://practice.local/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>{{ $title }} | Penembak Jitu</title>
</head>

<body>

    @include('partials.navbar')

    <div class="container mt-5">
        @yield('container')
    </div>
    
    <script src="http://practice.local/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>
