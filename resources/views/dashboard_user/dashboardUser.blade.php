@extends('custom_layout_users.bases.userbase')
@section('content')


<style>
#content-description {
    white-space: pre-wrap;
}

.absolute {
    position: absolute;
    z-index: 10;
}
</style>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="font-poppins bg-gray-50">
    <div class="max-w-full h-auto mx-auto px-6 bg-gradient-to-r from-blue-900 via-blue-700 to-blue-500 py-10 rounded-b-3xl">
        <div class="flex flex-wrap justify-between items-center">
            <!-- Teks -->
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
                <h1 class="text-3xl md:text-5xl font-bold mb-4 text-white text-center md:text-left">
                    Jangan Semangat!<br> Teruslah Malas!
                </h1>
                <p class="text-white mb-6 font-semibold text-center md:text-left">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dolorum. Vitae corrupti, quam atque laudantium fugiat veniam quo iure sed sit doloribus perspiciatis unde eaque ab nam assumenda. Non, ipsa!
                </p>
                <div class="flex justify-center md:justify-start">
                    <button class="w-full max-w-xs bg-blue-400 text-white px-5 py-2 rounded-2xl hover:bg-orange-400 font-semibold">
                        Daftar!
                    </button>
                </div>
            </div>
    
            <!-- Gambar -->
            <div class="w-full md:w-1/2">
                <img src="{{ asset('image/geda.jpeg') }}" alt="Pencitraan" class="w-full h-auto object-cover rounded-xl">
            </div>
        </div>
    </div>
    

    {{-- Ini Modal --}}


    <!-- dashboard_user.dashboardUser.blade.php -->

    <div class="container mx-auto px-6 py-10">
        <h2 class="text-center text-3xl font-bold mb-10">PILIHAN KELAS</h2>
        <div class="flex flex-wrap justify-center gap-4">
            @foreach($data as $product)
                <div class="w-full sm:w-1/3 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white relative flex flex-col justify-between">
                    <div class="w-full aspect-w-4 aspect-h-3">
                        <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->content_name }}" class="w-full h-full object-cover rounded-lg">
                    </div>
    
                    <div class="mt-4">
                        <!-- Menghapus text-center untuk nama konten dan memotong judul -->
                        <h3 class="text-lg sm:text-xl font-semibold">
                            {{ \Str::limit($product->content_name, 50, '...') }}
                        </h3>
                    </div>
    
                    <div class="absolute bottom-3 right-2 text-sm text-gray-500">
                        <!-- Memindahkan kategori ke bawah kanan -->
                        <p class="text-gray-600">{{ $product->kategori }}</p>
                    </div>
    
                    <div class="absolute bottom-3 left-2 text-sm text-gray-500">
                        <p class="text-lg font-bold text-green-500">Rp. {{ number_format($product->price) }}</p>
                    </div>
    
                    <div class="absolute bottom-10 left-2 text-sm text-gray-500">
                        Views: {{ $product->count_view }}
                    </div>
                    <div class="absolute bottom-10 right-2 text-sm text-gray-500">
                        Purchases: {{ $product->count_buy }}
                    </div>
    
                    <div class="mt-auto mb-20">
                        <button 
                            type="button" 
                            class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 w-full" 
                            data-id="{{ $product->id_content }}"
                            data-name="{{ $product->content_name }}"
                            data-price="{{ number_format($product->price) }}"
                            data-category="{{ $product->kategori }}"
                            {{-- data-description="{!! $product->deskripsi !!}" --}}
                            data-image="{{ asset('storage/' . $product->image_path) }}"
                            data-youtube="{{ $product->youtube_url }}"
                        >
                            Beli Konten
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    

{{-- Materi Terpopuler --}}
<div class="container mx-auto px-6 py-10">
    <h2 class="text-center text-3xl font-bold mb-10">KELAS TERPOPULER</h2>
    <div class="flex flex-wrap justify-center gap-2"> <!-- Mengurangi gap antara kotak konten -->
        @forelse($popularContent as $product)
            <div class="w-full sm:w-1/4 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white relative flex flex-col justify-between"> <!-- Mengurangi lebar menjadi 1/4 -->
                
                <div class="w-full aspect-w-4 aspect-h-3">
                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->content_name }}" class="w-full h-full object-cover rounded-lg">
                </div>

                <div class="mt-4">
                    <h3 class="text-lg sm:text-xl font-semibold">
                        {{ \Str::limit($product->content_name, 50, '...') }}
                    </h3>
                </div>

                <div class="absolute bottom-3 right-2 text-sm text-gray-500">
                    <p class="text-gray-600">{{ $product->kategori }}</p>
                </div>

                <div class="absolute bottom-3 left-2 text-sm text-gray-500">
                    <p class="text-lg font-bold text-green-500">Rp. {{ number_format($product->price) }}</p>
                </div>

                <div class="absolute bottom-10 left-2 text-sm text-gray-500">
                    Views: {{ $product->count_view }}
                </div>
                <div class="absolute bottom-10 right-2 text-sm text-gray-500">
                    Purchases: {{ $product->count_buy }}
                </div>

                <div class="mt-auto mb-20">
                    <button 
                        type="button" 
                        class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 w-full" 
                        data-id="{{ $product->id_content }}"
                        data-name="{{ $product->content_name }}"
                        data-price="{{ number_format($product->price) }}"
                        data-category="{{ $product->kategori }}"
                        data-image="{{ asset('storage/' . $product->image_path) }}"
                        data-youtube="{{ $product->youtube_url }}"
                    >
                        Beli Konten
                    </button>
                </div>
            </div>
        @empty
            <p>Tidak ada konten populer saat ini.</p>
        @endforelse
    </div>
</div>






{{-- footer --}}
</body>




@endsection