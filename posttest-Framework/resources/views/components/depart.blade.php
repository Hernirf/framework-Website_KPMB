<section class= "bg-gradient-to-tr from-blue-200 to-blue-900 items-center pb-12 -z-20" id="depar">
    <div class=" text-center  ">
        <h2 class="font-bold p-4 text-2xl text-white ">
            BIRO & DEPARTEMEN
        </h2>
    </div>
    <div class="container h-3/5 gap-8 grid grid-cols-5 p-5 justify-center m-auto">
        @foreach ($depar as $depar)
            <div class="h-24 w-auto flex bg-white rounded-3xl text-center justify-center">
                <h4 class="text-xl font-bold top-10 p-7">
                    {{$depar["nama"]}}
                </h4>
             </div>
        @endforeach
    </div>
</section>

