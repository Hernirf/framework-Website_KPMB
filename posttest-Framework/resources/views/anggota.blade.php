@extends('layouts.global')

@section('content')
    <div class="w-full h-full flex fie">
        @include('components.sidebar')
        {{-- <div class="w-full  flex flex-col bg-slate-100">
            @include('components.header', ['nama' => 'Tegar', 'gambar' => 'assets/images/ka-prodi.jpg']) --}}

            <div class="h-full w-full m-4 p-8 bg-white rounded-lg drop-shadow-md">
                <p class="text-4xl font-bold mb-4">Daftar Anggota KPMB</p>
                <hr><br>
                <div class="w-full h-auto flex justify-end">
                    <button class="px-4 py-2 bg-green-600 rounded-md text text-white">Tambah</button>
                </div><br>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No.
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ID Anggota
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Angkatan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jabatan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Departemen/Biro
                                </th>
                                <th scope="col" class="px-14 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($anggota as $anggo)
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                       {{$anggo->id}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$anggo->ID_anggota}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$anggo->nama}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$anggo->angkatan}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$anggo->jabatan}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$anggo->departemen->nama_departemen}}

                                    </td>
                                    <td class="px-6 py-4 flex gap-8">
                                        <div class="w-full h-auto">
                                            <button class="px-4 py-2 bg-yellow-300 rounded-md text">Edit</button>

                                            <button class="px-4 py-2 bg-red-600 rounded-md text text-white">Hapus</button>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        {{-- </div> --}}
    </div>
@endsection
