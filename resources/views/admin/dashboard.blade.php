<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    @if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success')}}
    </div>
    @endif

    <nav class="navbar navbar-expand-md navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Latihan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/dashboard')}}">dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/siswa')}}">siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/guru')}}">guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/kelas')}}">kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/prestasi')}}">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/kontak')}}">kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <h3>Selamat Datang,{{ Auth::user()->name }}!</h3>

        <form action="{{ route('logout')}}" method="post" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
</body>
</html>