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
  <h1 class="text-2xl font-semibold mb-4 text-center">Login</h1>

  <form name="wf-form-password" >
    <div class="relative">
      <img alt="" src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a9455fae6cf89_EnvelopeSimple.svg" class="absolute left-[5%] top-[26%] inline-block">
      <input type="email" class="mb-4 block w-full border border-solid border-black bg-white align-middle text-[#333333] focus:border-[#3898ec] text-sm px-3 rounded-md h-9 py-6 pl-14" maxlength="256" name="name-3" placeholder="Email Address">

    </div>
    <div class="relative mb-4">
      <img alt="" src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a946794e6cf8a_Lock-2.svg" class="absolute left-[5%] top-[26%] inline-block">
      <input class="mb-4 block w-full border border-solid border-black bg-white align-middle text-[#333333] focus:border-[#3898ec] text-sm px-3 rounded-md h-9 py-6 pl-14" maxlength="256" name="password-4" placeholder="Password (min 8 characters)">
    </div>
      <!-- Forgot Password Link -->
      <div class="mb-6 text-black">
        <a href="#" class="hover:underline">Forgot Password?</a>
      </div>
      <!-- Login Button -->
      <div class="flex items-center px-40">
      <button  class="bg-black hover:bg-blue-900 text-white font-semibold rounded-md py-2 px-4 w-48">
        <a href="{{ route('dashboard') }}">
            Login
        </a>
        </button>

      </div>
  </form>

  <!-- Sign up  Link -->
  <div class="mt-6 text-black text-center">
    <a href="#" class="hover:underline">Sign up Here</a>
  </div>
</div>
</div>

@endsection

