<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">

    <title>Document</title>
</head>
<body style="overflow-x: hidden">
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(103, 197, 139);">
        <div class="container-fluid">
            <a class="navbar-brand" style="margin-left: 20%;" href="#">KisahSingkat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin-left: 50%;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentangkami">Tentang Kami</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid ">
        @yield('content')
    </div>
</body>
</html>