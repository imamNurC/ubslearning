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
                <div class="w-full md:w-1/2">
                    <img src="image/geda.jpeg" alt="Pencitraan" class="w-full rounded-xl">
                </div>
            </div>
        </div>

        <div id="modal-overlay" class="hidden fixed inset-0 bg-black bg-opacity-70 z-[70]"></div>
        <div id="hs-scale-animation-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label">
            <div class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
              <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="items-center py-3 px-4 border-b">
                  <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800 text-center">
                    Deskripsi Produk
                  </h3>
                </div>
                <div class="p-4 overflow-y-auto">
                    <img src="image/geda.jpeg" alt="Pencitraan" class="w-full rounded-xl">
                  <p class="mt-1 text-gray-800">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas alias esse corrupti, animi labore reprehenderit doloremque impedit ipsum autem. Enim alias illum totam minus dolorem obcaecati. Neque sint blanditiis provident.</br>
                    -lorem</br>
                    -lorem</br>
                    -lorem</br>
                    -lorem</br>
                    -lorem</br>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-red-500 text-white shadow-sm hover:bg-red-600 focus:outline-none focus:bg-gray-50" onclick="closeModal()">
                        Close
                    </button>
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                        Beli Konten
                    </button>
                </div>
              </div>
            </div>
          </div>

    <div class="container mx-auto px-6 py-10">
        
          
          
        <h2 class="text-center text-3xl font-bold mb-10 "> PILIHAN KELAS</h2>
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

        <div class=" px-6 max-w-full bg-gray-900">
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
</body>


<script>
    function openModal() {
        const modal = document.getElementById('hs-scale-animation-modal');
        const overlay = document.getElementById('modal-overlay');

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

        // Hide the modal
        modal.classList.add('hidden');
        modal.classList.remove('pointer-events-auto', 'opacity-100');
        modal.querySelector('.hs-overlay-animation-target').classList.add('scale-95', 'opacity-0');

        // Hide the overlay
        overlay.classList.add('hidden');
    }
</script>

@endsection

