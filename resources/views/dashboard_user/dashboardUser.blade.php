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
        <div class="max-w-full h-[400px] mx-auto px-6 bg-gradient-to-r from-blue-900 via-blue-700 to-blue-500 py-10 rounded-b-3xl">
            <div class="flex flex-wrap justify-around items-center mt-auto">
                <div class="w-full md:w-1/2">
                    <h1 class="text-5xl font-bold mb-4 text-white">Jangan Semangat!<br> Teruslah Malas!</h1>
                    <p class="text-white mb-6 font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dolorum. Vitae corrupti, quam atque laudantium fugiat veniam quo iure sed sit doloribus perspiciatis unde eaque ab nam assumenda. Non, ipsa!</span>
                    </p>
                    <button class="w-[475px] bg-blue-400 text-white px-5 py-2 rounded-2xl hover:bg-orange-400 font-semibold">Daftar!</button>
                </div>
                <div class="w-full md:w-1/2">
                    <img src="{{ asset('image/geda.jpeg') }}" alt="Pencitraan" class="w-full rounded-xl">
                </div>
            </div>
        </div>

    {{-- Ini Modal --}}
    <div id="modal-overlay" class="hidden fixed inset-0 bg-black bg-opacity-70 z-[70]"></div>
<div id="hs-scale-animation-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label">
    <div class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
            <div class="items-center py-3 px-4 border-b">
                <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800 text-center">
                    <span id="content-name">Nama Konten</span>
                </h3>
            </div>
            <div class="p-4 overflow-y-auto">
                <img id="content-image" src="" alt="Gambar Produk" class="w-full rounded-xl">
                <p class="mt-2 text-gray-800">
                    <strong>Harga:</strong> <span id="content-price"></span><br>
                    <strong>Kategori:</strong> <span id="content-category"></span><br>
                </p>
                <div id="video-container" class="mt-4">
                    {{-- Isi Video Nya --}}
                </div>
                <p class="mt-4 text-gray-600" id="content-description">
                    Deskripsi panjang akan ditampilkan di sini.
                </p>
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-red-500 text-white shadow-sm hover:bg-red-600 focus:outline-none" onclick="closeModal()">
                    Close
                </button>
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                    Beli Konten
                </button>
            </div>
        </div>
    </div>
</div>


    <!-- dashboard_user.dashboardUser.blade.php -->

        <div class="container mx-auto px-6 py-10">
            <h2 class="text-center text-3xl font-bold mb-10">PILIHAN KELAS</h2>
            <div class="flex flex-wrap justify-center gap-4">
                @foreach($data as $product)
                    <div class="w-full sm:w-1/3 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white relative flex flex-col justify-between">
                        <div class="w-full aspect-w-4 aspect-h-3">
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->content_name }}" class="w-full h-full object-cover rounded-lg">
                        </div>

                        <div class="mt-4 text-center">
                            <h3 class="text-lg sm:text-xl font-semibold">{{ $product->content_name }}</h3>
                        </div>

                        <div class="mt-auto text-center">
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
                                data-description="{!! $product->deskripsi !!}"
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


    <div class="container mx-auto px-6 pt-0 pb-10">
        <h2 class="text-center text-3xl font-bold mb-10"> MATERI TERPOPULER</h2>
        <div class="flex flex-wrap justify-center gap-4">
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <a href="product_details.html"><img src="https://i.ibb.co/47Sk9QL/product-1.jpg" alt="" class="w-full rounded-lg"></a>
                <a href="product_details.html">
                    <h4 class="text-gray-700 font-semibold mt-2">Tukang Ketik</h4>
                </a>
                <p class="text-orange-600 cursor-pointer hover:text-red-600 font-semibold">Rp. 10.000</p>
                <button type="button" class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700" onclick="openModal()">
                    Beli Konten
                </button>
            </div>
      
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/b7ZVzYr/product-2.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-semibold mt-2">Tukang Desain</h4>
                <p class="text-orange-600 cursor-pointer hover:text-red-600 font-semibold">Rp.10.000</p>
                <button type="button" class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700" onclick="openModal()">
                    Beli Konten
                </button>
            </div>
      
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-semibold mt-2">Tukang Ager</h4>
                <p class="text-orange-600 cursor-pointer hover:text-red-600 font-semibold">Rp.10.000</p>
                <button type="button" class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700" onclick="openModal()">
                    Beli Konten
                </button>
            </div>
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-semibold mt-2">Tukang Ager</h4>
                <p class="text-orange-600 cursor-pointer hover:text-red-600 font-semibold">Rp.10.000</p>
                <button type="button" class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700" onclick="openModal()">
                    Beli Konten
                </button>
            </div>
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-semibold mt-2">Tukang Ager</h4>
                <p class="text-orange-600 cursor-pointer hover:text-red-600 font-semibold">Rp.10.000</p>
                <button type="button" class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700" onclick="openModal()">
                    Beli Konten
                </button>
            </div>
        </div>
    </div>


        {{-- footer --}}
</body>


<script>
    let isViewCountUpdated = false;
    const updatedViewCounts = new Set();

    function openModal(button) {
        const id = button.getAttribute('data-id');
        const modal = document.getElementById('hs-scale-animation-modal');
        const overlay = document.getElementById('modal-overlay');
        const videoContainer = document.getElementById('video-container');


        // Ambil data dari tombol
        const name = button.getAttribute('data-name');
        const price = button.getAttribute('data-price');
        const category = button.getAttribute('data-category');
        const description = button.getAttribute('data-description');
        const image = button.getAttribute('data-image');
        const youtubeUrl = button.getAttribute('data-youtube');
        

        const videoId = youtubeUrl.split('v=')[1].split('&')[0];

        const iframe = `<iframe width="100%" height="315" src="https://www.youtube.com/embed/${videoId}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
        videoContainer.innerHTML = iframe;

        // Isi data ke dalam modal
        document.getElementById('content-name').textContent = name;
        document.getElementById('content-price').textContent = `Rp. ${price}`;
        document.getElementById('content-category').textContent = category;
        // console.log(description);
        document.getElementById('content-description').innerHTML = description;
        document.getElementById('content-image').src = image;

        //Menambah view count
        if (!updatedViewCounts.has(id)) {
        fetch(`/update-view-count/${id}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Pastikan CSRF token
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log('View count updated:', data);
            updatedViewCounts.add(id);
        })
        .catch(error => console.error('Error updating view count:', error));
    }

        // Show the modal
        modal.classList.remove('hidden');
        modal.classList.add('pointer-events-auto', 'opacity-100');
        modal.querySelector('.hs-overlay-animation-target').classList.remove('scale-95', 'opacity-0');

        // Show the overlay
        overlay.classList.remove('hidden');
    }

    function closeModal() {
        const modal = document.getElementById('hs-scale-animation-modal');
        const overlay = document.getElementById('modal-overlay');
        const videoContainer = document.getElementById('video-container');

        const iframe = videoContainer.querySelector('iframe');
        if (iframe) {
            iframe.src = 'about:blank'; // This will stop the video playback
        }

        // Hide the modal
        modal.classList.add('hidden');
        modal.classList.remove('pointer-events-auto', 'opacity-100');
        modal.querySelector('.hs-overlay-animation-target').classList.add('scale-95', 'opacity-0');

        // Hide the overlay
        overlay.classList.add('hidden');

        videoContainer.innerHTML = '';
    }

    const buttons = document.querySelectorAll('[data-youtube]');
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                openModal(this);
            });
        });
</script>

@endsection