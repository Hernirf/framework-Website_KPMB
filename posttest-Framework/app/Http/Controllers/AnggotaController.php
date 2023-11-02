<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Departemen;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function tambah(){
        return view('CrudAnggota.add', [
            'departemen' => Departemen::all()
        ]);
    }

    public function store(Request $request){
        // Validate Input
        $validateData = $request->validate([
        'ID_anggota' => 'required|string|max:16',
        'nama' => 'required|string',
        'angkatan' => 'required',
        'jabatan' => 'required',
        'departemen_id' => 'required'
        ]);
        Anggota::create($validateData);
        return redirect()->route('anggota')->with('success','Data Anggota Berhasil Ditambahkan');
    }

    public function edit($id){
        return view('CrudAnggota.edit',[
        'anggota' => Anggota::all()->where('id', $id)->first(),
        'departemen' => Departemen::all(),
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'ID_anggota' => 'required|string|max:16',
            'nama' => 'required|string',
            'angkatan' => 'required',
            'jabatan' => 'required',
            'departemen_id' => 'required'
        ]);
        $anggotas = Anggota::findOrFail($id);
        $anggotas->update([
            'ID_anggota' => $request->ID_anggota,
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'jabatan' => $request->jabatan,
            'departemen_id' => $request->departemen_id,
        ]);
        return redirect()->route('anggota')->with('success','Data Mahasiswa Berhasil Diubah');
    }

    public function delete($id){
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();
        return redirect()->route('anggota')->with('success','Data Mahasiswa
        Berhasil Dihapus');
    }
}
