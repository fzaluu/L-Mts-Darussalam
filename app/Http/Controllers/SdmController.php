<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sdm;

class SdmController extends Controller
{
    public function index()
    {
        $guru = Sdm::all();
        return view('admin.guru.index', compact('guru'));
    }

    public function sdm()
    {
        $sdm = Sdm::all();
        return view('sdm', compact('sdm'));
    }

        public function create()
    {
        return view('admin.guru.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required',
            'mapel' => 'nullable',      
            'jabatan' => 'nullable',    
            'foto' => 'required|image'
        ]);

        $namaFoto = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('assets/img'), $namaFoto);

        Sdm::create([
            'nama_guru' => $request->nama_guru,
            'mapel'     => $request->mapel,
            'jabatan'   => $request->jabatan,
            'foto'      => $namaFoto,
        ]);

        return redirect('/admin/guru')->with('sukses', 'Data Guru berhasil ditambahkan!');
    }
   public function edit($id)
{
    $sdm = Sdm::findOrFail($id);
    return view('admin.guru.edit', compact('sdm'));
}

public function update(Request $request, $id)
{
    $sdm = Sdm::findOrFail($id);

    $data = [
        'nama_guru' => $request->nama_guru,
        'mapel'     => $request->mapel,
        'jabatan'   => $request->jabatan,
    ];

    if ($request->hasFile('foto')) {
        $namaFoto = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('assets/img'), $namaFoto);
        $data['foto'] = $namaFoto;
    }

    $sdm->update($data);

    return redirect('/admin/guru')->with('sukses', 'Data Guru berhasil diupdate!');
}

public function destroy($id)
{
    $sdm = Sdm::findOrFail($id);
    $sdm->delete();

    return redirect('/admin/guru')->with('sukses', 'Data Guru berhasil dihapus!');
}
}