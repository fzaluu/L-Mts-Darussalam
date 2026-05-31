<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
    <div class="container mt-5">
        <h3>Tabel Guru</h3>
       <div class="text-end mb-4">
            <a href="/admin/guru/create" class="btn btn-primary my-2"> + Tambah Data</a>
        </div>
        <div class="row justify-content-center align-items-center">
                <table class="table table-hover table-striped table-bordered border-dark">
                            <thead>
                                <tr class="table-hover table-dark table-active"> 
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Mapel</th>
                                    <th scope="col">Foto</th>
                                    <th class="text-center" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($guru as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>  {{-- No: gunakan $loop->iteration --}}
                                    <td>{{ $data->nama_guru }}</td>
                                    <td>{{ $data->jabatan }}</td>
                                    <td>{{ $data->mapel }}</td>
                                    <td>
                                        <img src="{{ asset('assets/img/' . $data->foto) }}" width="50" height="50" style="object-fit: cover; border-radius: 50%;">
                                    </td>
                                    <td class="text-center">
                                      <a href="/admin/guru/{{ $data->id }}/edit" class="btn btn-sm btn-warning">Edit</a> |
                                        <form action="/admin/guru/{{ $data->id }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                </table>   
        </div>
    </div>
</body>
</html>