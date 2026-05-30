<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h3>Selamat Datang,{{ Auth::user()->name }}!</h3>

    <form action="{{ route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger"><i class="bi bi-box-arrow-right"></i>Logout</button>
    </form>
</body>
</html>