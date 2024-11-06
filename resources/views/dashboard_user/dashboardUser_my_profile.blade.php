@extends('custom_layout_users.bases.userbase')
@section('content')
<section class="w-full overflow-hidden dark:bg-gray-50">
    <div class="flex flex-col">
        <!-- Profile Image -->
        <div class="flex flex-col items-center sm:w-[80%] xs:w-[90%] mx-auto mt-8">
            <img src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxwZW9wbGV8ZW58MHwwfHx8MTcxMTExMTM4N3ww&ixlib=rb-4.0.3&q=80&w=1080" 
                 alt="User Profile"
                 class="rounded-md lg:w-[12rem] lg:h-[12rem] md:w-[10rem] md:h-[10rem] sm:w-[8rem] sm:h-[8rem] xs:w-[7rem] xs:h-[7rem] outline outline-2 outline-offset-2 outline-blue-500 mb-4" />
        
            <!-- FullName -->
            <h1 class="text-center text-gray-800 dark:text-black lg:text-4xl md:text-3xl sm:text-3xl xs:text-xl font-serif">
                Samuel Abera
            </h1>
        </div>
        

        <div
            class="xl:w-[80%] lg:w-[90%] md:w-[90%] sm:w-[92%] xs:w-[90%] mx-auto flex flex-col gap-4 items-center relative lg:-top-8 md:-top-6 sm:-top-4 mt-7">
            <!-- Detail -->
            <div class="w-full my-auto py-6 flex flex-col justify-center gap-2">
                <div class="w-full flex sm:flex-row xs:flex-col gap-2 justify-center">
                    <div class="w-full">
                        <dl class="text-gray-900 divide-y divide-gray-200 dark:text-black dark:divide-gray-700">
                            <div class="flex flex-col pb-3">
                                <dt class="mb-1 text-black md:text-lg dark:text-black">Name</dt>
                                <dd class="text-lg font-semibold">Samuel</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-black md:text-lg dark:text-black">Username</dt>
                                <dd class="text-lg font-semibold">Abera</dd>
                            </div>
                        </dl>
                    </div>
                    <div class="w-full">
                        <dl class="text-gray-900 divide-y divide-gray-200 dark:text-black dark:divide-black">
                            <div class="flex flex-col pt-3">
                                <dt class="mb-1 text-black md:text-lg dark:text-black">Phone Number</dt>
                                <dd class="text-lg font-semibold">+251913****30</dd>
                            </div>
                            <div class="flex flex-col pt-3">
                                <dt class="mb-1 text-black md:text-lg dark:text-black">Email</dt>
                                <dd class="text-lg font-semibold">samuelabera87@gmail.com</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class=" mt-2 px-6 max-w-full bg-gray-900">
    <div class="flex justify-center mb-6">
        <div class="text-center sm:w-1/3">
            <img src="image/Malaz_Solutions.png" alt="logo" class="w-32 bg-white mt-1 rounded-md">
            <p class="text-left text-white">PT. PT Ceban </br>
            Jl. Jalanin Aja Dulu No.99, Desa Gacor, Zeus, Bekasi 17510 
            </p>
        </div>
        <div class="text-center sm:w-1/3">
            <h3 class="text-white text-lg font-semibold mb-2">Pusat Bantuan</h3>
            <ul class="space-y-2">
                <li class="text-white hover:text-red-500 cursor-pointer font-semibold">FAQ</li>
                <li class="text-white hover:text-red-500 cursor-pointer font-semibold">Hubungi Kami</li>
                <li class="text-white hover:text-red-500 cursor-pointer font-semibold">Kebijakan Privasi</li>
                <li class="text-white hover:text-red-500 cursor-pointer font-semibold">Syarat & Ketentuan</li>
            </ul>
        </div>
        <div class="text-center sm:w-1/3">
            <h3 class="text-white text-lg font-semibold mb-2">Follow us</h3>
            <ul class="space-y-2">
                <li class="text-white hover:text-red-500 cursor-pointer font-semibold">Facebook</li>
                <li class="text-white hover:text-red-500 cursor-pointer font-semibold">Twitter</li>
                <li class="text-white hover:text-red-500 cursor-pointer font-semibold">Instagram</li>
                <li class="text-white hover:text-red-500 cursor-pointer font-semibold">YouTube</li>
            </ul>
        </div>
    </div>
    <hr class="border-gray-400 w-full">
    <p class="text-center text-gray-200">Copyright &copy; 2024 - Malaz Solutions</p>
    </div>
@endsection