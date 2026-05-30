<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sdm;

class SdmController extends Controller
{
    public function index()
    {
        $sdm = Sdm::all();
        return view('sdm', compact('sdm'));
    }

    public function create()
    {
        return view('tambahsdm');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required',
            'mapel' => 'required',
            'jabatan' => 'required',
            'foto' => 'required|image'
        ]);

        $namaFoto = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('assets/img'), $namaFoto);

        Sdm::create([
            'nama_guru' => $request->nama_guru,
            'mapel' => $request->mapel,
            'jabatan' => $request->jabatan,
            'foto' => $namaFoto,
        ]);

        return redirect('/Sdm')->with('sukses','Data SDM berhasil ditambahkan!');
    }

   public function edit($id)
    {
        $sdm = Sdm::findOrFail($id);
        return view('editsdm', compact('sdm'));
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
            $fotoLama = public_path('assets/img/' . $sdm->foto);
            if (file_exists($fotoLama)) {
                unlink($fotoLama);
            }
            $namaFoto = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('assets/img'), $namaFoto);
            $data['foto'] = $namaFoto;
        }

        $sdm->update($data);

        return redirect('/Sdm')->with('sukses','Data SDM berhasil diubah!');
    }



public function destroy($id)
{
    $sdm = Sdm::findOrFail($id);

    // Hapus foto dari storage
    $fotoPath = public_path('assets/img/' . $sdm->foto);
    if (file_exists($fotoPath)) {
        unlink($fotoPath);
    }

    $sdm->delete();

    return redirect('/Sdm')->with('sukses', 'Data SDM berhasil dihapus!');
}
}