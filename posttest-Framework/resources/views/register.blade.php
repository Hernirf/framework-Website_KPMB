@extends('layouts.global')
@section('content')

<!-- component -->
<div class="bg-gray-100 flex justify-center items-center h-screen">
    <!-- Left: Image -->
<div class="w-1/2 h-screen hidden lg:block">
  <img src="{{asset('assets/img/fotoKPMB.jpg')}}" alt="Placeholder Image" class="object-cover w-full h-full brightness-50">
</div>
<!-- Right: Login Form -->
<div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
  <h1 class="text-2xl font-semibold mb-4 text-center">Registrasi</h1>

  <form  action="{{route('register.action')}}" method="POST">
    @csrf
    @if(session('error'))
        <div class="w-full relative mb-6">
            <div class="p-2 rounded-sm bg-red-100 ring-1 ring-red-500">
                <p class="text-red-500">
                    {{ session('error') }}
                </p>
            </div>
        </div>
    @endif
    @if(session('success'))
        <div class="w-full relative mb-6">
            <div class="p-2 rounded-sm bg-green-100 ring-1 ring-green-500">
                <p class="text-green-500">
                    {{ session('success')}}

                </p>
            </div>
        </div>

    @endif
    <div class="relative">
      <img alt="" src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a9455fae6cf89_EnvelopeSimple.svg" class="absolute left-[5%] top-[26%] inline-block">
      <input type="name" class="mb-4 block w-full border border-solid border-black bg-white align-middle text-[#333333] focus:border-[#3898ec] text-sm px-3 rounded-md h-9 py-6 pl-14" maxlength="256" name="username" placeholder="Username">

    </div>
    <div class="relative mb-4">
      <img alt="" src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a946794e6cf8a_Lock-2.svg" class="absolute left-[5%] top-[26%] inline-block">
      <input class="mb-4 block w-full border border-solid border-black bg-white align-middle text-[#333333] focus:border-[#3898ec] text-sm px-3 rounded-md h-9 py-6 pl-14" maxlength="256" name="password" placeholder="Password (min 8 characters)">
    </div>

    <div class="relative mb-4">
        <img alt="" src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a946794e6cf8a_Lock-2.svg" class="absolute left-[5%] top-[26%] inline-block">
        <input class="mb-4 block w-full border border-solid border-black bg-white align-middle text-[#333333] focus:border-[#3898ec] text-sm px-3 rounded-md h-9 py-6 pl-14" maxlength="256" name="password_confirm" placeholder="Confirm Password">
      </div>

      <!-- Login Button -->
      <div class="flex items-center px-40">
      <button  class="bg-black hover:bg-blue-900 text-white font-semibold rounded-md py-2 px-4 w-60" type="submit">
        Sign Up </button>

      </div>
  </form>

   <!-- Sign up  Link -->
   <div class="mt-6 text-black text-center">
    <a href="{{route('login')}}" class="hover:underline">Have Account</a>
  </div>
</div>
</div>

@endsection

