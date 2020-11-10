    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/template.css') }}">
    @yield('css')
</head>

<body class="bg-light">
    <div class="container">
        <nav class="navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/home">BeeFlix</a>
        </nav>
        <div class="btn-group mb-3" role="group" aria-label="Basic example">
            <a href="{{ url()->previous() }}" class="btn btn-dark btn-sm">
                <i class="fa fa-arrow-left"></i> KEMBALI</a>
            <a href="/home" class="btn btn-outline-dark btn-sm">LIHAT SEMUA FILM</a>
        </div>

        <div class="container bg-template p-3">
            @yield('content')
        </div>
    </div>

    {{-- footer --}}
    <footer>
        <div class="text-center py-3">© 2020 Copyright: 2201751064 - ALBERT </div>
    </footer>
</body>

</html>
