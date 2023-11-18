<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Departemen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AnggotaController extends Controller
{
    public function tambah(){
        return view('anggota.add', [
            'departemen' => Departemen::all()
        ]);
    }

    public function store(Request $request){
        // Validate Input
        $request->validate([
            'ID_anggota' => 'required|string|max:16',
            'nama' => 'required|string',
            'angkatan' => 'required',
            'jabatan' => 'required',
            'departemen_id' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);


        $image = $request->file('foto');
        $imageName = $image->getClientOriginalName();
        $image->move('assets/img/', $imageName);



        // dd($request->ID_anggota);

        Anggota::create([
            'ID_anggota'=> $request->ID_anggota,
            'nama'=>$request->nama,
            'angkatan'=>$request->angkatan,
            'jabatan'=>$request->jabatan,
            'foto'=>$imageName,
            'departemen_id'=>$request->departemen_id,

        ]);
        return redirect()->route('anggota')->with('success','Data Anggota Berhasil Ditambahkan');
    }

    public function edit($id){
        return view('anggota.edit',[
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
            'departemen_id' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $anggotas = Anggota::findOrFail($id);
        unlink('assets/img/'. $anggotas->foto);
        $image = $request->file('foto');
        $imageName = $image->getClientOriginalName();
        $image->move('assets/img/', $imageName);

        $anggotas->update([
            'ID_anggota' => $request->ID_anggota,
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'jabatan' => $request->jabatan,
            'foto'=>$imageName,
            'departemen_id' => $request->departemen_id,
        ]);
        return redirect()->route('anggota')->with('success','Data Mahasiswa Berhasil Diubah');
    }

    public function delete($id){
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        unlink('assets/img/'. $anggota->foto);

        return redirect()->route('anggota')->with('success','Data Mahasiswa
        Berhasil Dihapus');
    }

    public function download_excel()
    {
        // Retrieve data from the database
        $anggota = Anggota::all();

        // Generate Excel content
        $content = "ID Anggota\tNama\tAngkatan\tJabatan\tDepartemen\tFoto\n";

        foreach ($anggota as $anggotaa) {
            $content .= "{$anggotaa->ID_anggota}\t{$anggotaa->nama}\t{$anggotaa->angkatan}\t{$anggotaa->jabatan}\t{$anggotaa->departemen->nama_departemen}\t{$anggotaa->foto}\n";
        }

        // Set headers for download
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=anggotaKPMB.xls");
        header("Pragma: no-cache");
        header("Expires: 0");

        // Output content to the browser
        echo $content;
        exit;
        return redirect()->route('anggota');
    }
}
