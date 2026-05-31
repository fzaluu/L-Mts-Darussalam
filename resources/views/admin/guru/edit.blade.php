<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h3>Edit Data Guru</h3>
        <form action="/admin/guru/{{ $sdm->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Guru</label>
                <input type="text" name="nama_guru" class="form-control" value="{{ $sdm->nama_guru }}" placeholder="Masukkan nama guru">
            </div>

            <div class="mb-3">
                <label class="form-label">Mata Pelajaran</label>
                <input type="text" name="mapel" class="form-control" value="{{ $sdm->mapel }}" placeholder="Masukkan mapel">
            </div>

            <div class="mb-3">
                <label class="form-label">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" value="{{ $sdm->jabatan }}" placeholder="Masukkan jabatan">
            </div>

            <div class="mb-3">
                <label class="form-label">Foto (kosongkan jika tidak ingin mengganti)</label>
                <input type="file" name="foto" class="form-control">
                @if($sdm->foto)
                    <img src="{{ asset('assets/img/' . $sdm->foto) }}" class="mt-2" style="height:80px; border-radius:6px;">
                @endif
            </div>

            <a href="/admin/guru" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>