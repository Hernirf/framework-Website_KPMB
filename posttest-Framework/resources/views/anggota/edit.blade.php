@extends('layouts.global')

@section('content')


    <!-- Container -->
    <div class="mx-auto w-full max-w-3xl px-5 py-16 md:px-10 md:py-24 lg:py-32">
      <!-- Component -->
      <div class="mx-auto max-w-xl bg-black px-8 py-12 text-center rounded-2xl">



          <!-- Form -->
          <div class="mx-auto mb-4 max-w-[400px] pb-4">
            <form  action="{{route('Anggota.update', $anggota->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="w-full relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <svg class="h-6 fill-slate-400" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                            <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h167q11-35 43-57.5t70-22.5q40 0 71.5 22.5T594-840h166q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560h-80v120H280v-120h-80v560Zm280-560q17 0 28.5-11.5T520-800q0-17-11.5-28.5T480-840q-17 0-28.5 11.5T440-800q0 17 11.5 28.5T480-760Z"/>
                        </svg>
                    </div>
                    <input type="text" name="ID_anggota"  placeholder ="ID Anggota..."  value="{{$anggota->ID_anggota}}"  class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                </div>
                <div class="w-full relative mt-6">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <svg class="h-6 fill-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                            <path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/>
                        </svg>
                    </div>
                    <input type="text" name="nama" placeholder="Nama..." value="{{$anggota->nama}}" class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                </div>

                <div class="w-full relative mt-6">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <svg class="h-6 fill-slate-400" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                            <path d="M480-120 200-272v-240L40-600l440-240 440 240v320h-80v-276l-80 44v240L480-120Zm0-332 274-148-274-148-274 148 274 148Zm0 241 200-108v-151L480-360 280-470v151l200 108Zm0-241Zm0 90Zm0 0Z"/>
                        </svg>
                    </div>
                    <select type="text" name="angkatan" class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                        <option value="" disabled selected>Angkatan...</option>
                        @foreach (range(2019,2023) as $item)
                            <option value='{{$item}}' {{$anggota->angkatan == $item ? 'selected':''}}>{{$item}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full relative mt-6">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <svg class="h-6 fill-slate-400" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                            <path d="M120-120v-80h80v-640h400v40h160v600h80v80H680v-600h-80v600H120Zm160-640v560-560Zm160 320q17 0 28.5-11.5T480-480q0-17-11.5-28.5T440-520q-17 0-28.5 11.5T400-480q0 17 11.5 28.5T440-440ZM280-200h240v-560H280v560Z"/>
                        </svg>
                    </div>
                    <select type="text" name="jabatan" class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                        <option value="" disabled selected>Jabatan...</option>
                        <option value='Ketua' {{$anggota->jabatan == 'Ketua' ? 'selected':''}}>Ketua</option>
                        <option value='Sekretaris' {{$anggota->jabatan == 'Sekretaris' ? 'selected':''}}>Sekretaris</option>
                        <option value='Bendahara' {{$anggota->jabatan == 'Bendahara' ? 'selected':''}}>Bendahara</option>
                        <option value='Anggota' {{$anggota->jabatan == 'Anggota' ? 'selected':''}}>Anggota</option>
                    </select>
                </div>
                <div class="w-full relative mt-6">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <svg class="h-6 fill-slate-400" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                            <path d="m798-322-62-62q44-41 69-97t25-119q0-63-25-118t-69-96l62-64q56 53 89 125t33 153q0 81-33 153t-89 125ZM670-450l-64-64q18-17 29-38.5t11-47.5q0-26-11-47.5T606-686l64-64q32 29 50 67.5t18 82.5q0 44-18 82.5T670-450Zm-310 10q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-120v-112q0-33 17-62t47-44q51-26 115-44t141-18q77 0 141 18t115 44q30 15 47 44t17 62v112H40Zm80-80h480v-32q0-11-5.5-20T580-266q-36-18-92.5-36T360-320q-71 0-127.5 18T140-266q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-600q0-33-23.5-56.5T360-680q-33 0-56.5 23.5T280-600q0 33 23.5 56.5T360-520Zm0-80Zm0 400Z"/>
                        </svg>
                    </div>
                    <select type="text" name="departemen_id" class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500">
                        <option value="" disabled selected>Departemen/Biro...</option>
                        @foreach ($departemen as $departement)
                            <option value="{{$departement->id}}" {{$departement->id == $anggota->departemen_id ? 'selected':''}} >{{$departement->nama_departemen}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full relative mt-6">
                    <label for="foto" class="text-white flex justify-start"> Upload Foto</label>
                    <input type="file" name="foto" placeholder="Upload Foto..." class="w-full ps-12 pe-4  bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-blue-500 " value="{{asset('assets/img/'. $anggota->foto)}}">
                </div>
              <input type="submit" value="Edit" class="mt-10 inline-block w-full cursor-pointer items-center rounded-md bg-blue-900 px-6 py-3 text-center font-semibold text-white" />
            </form>
      </div>
    </div>


@endsection
