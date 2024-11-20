@extends('custom_layout_users.bases.userbase')
@section('content')





<body class="font-poppins bg-gray-50">
        <div class="max-w-full h-[400px] mx-auto px-6 bg-gradient-to-r from-blue-900 via-blue-700 to-blue-500 py-10 rounded-b-3xl">
            <div class="flex flex-wrap justify-around items-center mt-auto">
                <div class="w-full md:w-1/2">
                    <h1 class="text-5xl font-bold mb-4 text-white">Jangan Semangat!<br> Teruslah Malas!</h1>
                    <p class="text-white mb-6 font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dolorum. Vitae corrupti, quam atque laudantium fugiat veniam quo iure sed sit doloribus perspiciatis unde eaque ab nam assumenda. Non, ipsa!</span>
                    </p>
                    <button class="w-[475px] bg-blue-400 text-white px-5 py-2 rounded-2xl hover:bg-orange-400 font-semibold">Daftar!</button>
                </div>
                <div class="w-1/2 md:w-1/4">
                    <img src="{{ asset('image/geda.jpeg') }}" alt="Pencitraan" class="w-full rounded-xl">
                </div>
            </div>
        </div>

       

    <!-- dashboard_user.dashboardUser.blade.php -->

        <div class="container mx-auto px-6 py-10">
            <h2 class="text-center text-3xl font-bold mb-10">PILIHAN KELAS</h2>
            <div class="flex flex-wrap justify-center gap-4">
                @foreach($data as $product)
                    <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                        <!-- Menampilkan gambar produk -->
                        <div class="w-full h-48 aspect-w-1 aspect-h-1">
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->content_name }}" class="w-full h-full object-cover rounded-lg">
                        </div>

                        <!-- Display product content details -->
                        <h3 class="text-xl font-semibold">{{ $product->content_name }}</h3>
                        <p class="text-gray-600">{{ $product->kategori }}</p>
                        <p class="text-lg font-bold text-green-500">Rp. {{ number_format($product->price) }}</p>

                        <!-- Link YouTube -->
                        <div class="my-2">
                            <a href="{{ $product->youtube_url }}" target="_blank" class="text-blue-500">Watch on YouTube</a>
                        </div>

                        <!-- Deskripsi Produk -->
                        <p class="text-sm text-gray-500">{!! Str::limit($product->deskripsi, 100) !!}</p>

                        
                        <!-- Tombol Beli -->
                        <button type="button" class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700" onclick="openModalBeli()">
                            Beli Konten
                        </button>
                    </div>
            @endforeach


            </div>
        </div>


    <div class="container mx-auto px-6 pt-0 pb-10">
        <h2 class="text-center text-3xl font-bold mb-10"> MATERI TERPOPULER</h2>
        <div class="flex flex-wrap justify-center gap-4">
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <a href="product_details.html"><img src="https://i.ibb.co/47Sk9QL/product-1.jpg" alt="" class="w-full rounded-lg"></a>
                <a href="product_details.html">
                    <h4 class="text-gray-700 font-semibold mt-2">Tukang Ketik</h4>
                </a>
                <p class="text-orange-600 cursor-pointer hover:text-red-600 font-semibold">Rp. 10.000</p>
                <button type="button" class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700" onclick="openModalBeli()">
                    Beli Konten
                </button>
            </div>
      
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/b7ZVzYr/product-2.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-semibold mt-2">Tukang Desain</h4>
                <p class="text-orange-600 cursor-pointer hover:text-red-600 font-semibold">Rp.10.000</p>
                <button type="button" class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700" onclick="openModalBeli()">
                    Beli Konten
                </button>
            </div>
      
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-semibold mt-2">Tukang Ager</h4>
                <p class="text-orange-600 cursor-pointer hover:text-red-600 font-semibold">Rp.10.000</p>
                <button type="button" class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700" onclick="openModalBeli()">
                    Beli Konten
                </button>
            </div>
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-semibold mt-2">Tukang Ager</h4>
                <p class="text-orange-600 cursor-pointer hover:text-red-600 font-semibold">Rp.10.000</p>
                <button type="button" class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700" onclick="openModalBeli()">
                    Beli Konten
                </button>
            </div>
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-semibold mt-2">Tukang Ager</h4>
                <p class="text-orange-600 cursor-pointer hover:text-red-600 font-semibold">Rp.10.000</p>
                <button type="button" class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700" onclick="openModalBeli()">
                    Beli Konten
                </button>
            </div>
        </div>
    </div>


        {{-- footer --}}
</body>



@endsection

