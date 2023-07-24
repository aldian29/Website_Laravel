<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="styles.css" rel="stylesheet" />
    <title>@yield('title')</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        @section('sidebar')
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-primary"><img src="img/kaeskotak.jpg"
                        style="width: 20px; margin-right: 10px;">Inikaes
                </div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="beranda">Home</a>
                    <!--<a class="list-group-item list-group-item-action list-group-item-dark p-3" href="dsn">dosen</a>-->
                    @if (Auth::user()->role == 'dosen')
                    <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="dsn">Dosen</a>
                    @endif
                    <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="galeri">Galery</a>
                    <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="abot">About us</a>
                    <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="kontek">Contact</a>
                </div>
            @show
        </div>
        <div id="page-content-wrapper">
            @section('top')
                <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            @show
            <div class="container-fluid">
                <h1 class="mt-4">@yield('judul')</h1>
                @section('konten')

                @show
            </div>
        </div>
</body>

</html>
