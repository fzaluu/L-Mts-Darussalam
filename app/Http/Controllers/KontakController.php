<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontak = Kontak::all();
        return view('admin.kontak.index', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
        
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|min:3|max:50',
            'email' => 'required|email|max:100',
            'pesan' => 'required|string|min:10',
        ],[
            'nama.required' => 'Nama wajib diisi ya!',
            'nama.min' => 'Nama minimal harus 3 karakter.',
            'email.required' => 'Email wajib diisi!',
            'email.email' => 'Format email kamu salah, nih.',
            'pesan.required' => 'Isi pesan tidak boleh kosong!',
            'pesan.min' => 'Pesan terlalu pendek, minimal 10 karakter ya.',
        ]);

        Kontak::create([
            'nama'  => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
        return redirect()->back()->with('success', 'Pesan Kamu Berhasil Dikirim!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontak $kontak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontak $kontak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);

        $kontak->delete();

        return redirect()->route('admin.kontak.index')->with('success', 'Pesan berhasil dihapus!');
    }
}
