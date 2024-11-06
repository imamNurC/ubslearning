<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <!-- FONTS POPPINS-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />
    <title>Product</title>
</head>
<body class="font-poppins bg-gray-50">
        <div class="max-w-5xl h-[200px] mx-auto px-6 bg-gradient-to-r from-blue-900 via-blue-700 to-blue-500 py-10 rounded-b-2xl">
            <div class="flex justify-between items-center">
                <div>
                    <a href="index.html"><img src="image/Logo.png" alt="LMS" class="h-12"></a>
                </div>
                <nav>
                    <ul class="flex space-x-6">
                        <li><a href="{{ route('home') }}" class="text-white font-bold hover:text-red-500">Home</a></li>
                        <li><a href="{{ route('product') }}" class="text-white font-bold hover:text-red-500">Materi</a></li>
                        <li><a href="{{ route('profile') }}" class="text-white font-bold hover:text-red-500">Profile</a></li>
                    </ul>
                </nav>
            </div>
        <hr class="border-gray-400 w-full">
        <div class="flex justify-center mb-6">
            <div class="flex justify-start mt-8 sm:w-1/2 ">
                <p class="flex justify-center leading-9 mr-4 font-semibold text-white">Pilih Kategori:</p>
                <select class="text-gray-600 w-[200px] h-[45px] focus:bg-white bg-gray-200 border-2 rounded-lg p-2 outline-none text-left">
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="coding"><a href="#">Coding</a></option>
                    <option value="desain"><a href="#">Desain</a></option>
                    <option value="music-virtual"><a href="#">Music Virtual</a></option>
                </select>
            </div>
            
        <div class="flex justify-center mt-8 sm:w-1/2">
            <input type="text" placeholder="Search" class="w-[800px] h-[45px] focus:bg-white bg-gray-200 border-2 rounded-lg p-2 outline-none text-left leading-[30px]">
        </div>
        </div>
    </div>

    <div class="container mx-auto px-6 py-16">
        <p class="text-center text-2xl font-semibold mb-10">Coding Dasar</p>
        <div class="flex flex-wrap justify-center gap-4">
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <a href="product_details.html"><img src="https://i.ibb.co/47Sk9QL/product-1.jpg" alt="" class="w-full rounded-lg"></a>
                <a href="product_details.html">
                    <h4 class="text-gray-700 font-normal mt-4">Tukang Ketik</h4>
                </a>
                <p class="text-gray-700 cursor-pointer hover:text-orange-500">Rp. 10.000</p>
            </div>
      
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/b7ZVzYr/product-2.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-normal mt-4">Tukang Desain</h4>
                <p class="text-gray-700 cursor-pointer hover:text-orange-500">Rp.10.000</p>
            </div>
      
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-normal mt-4">Tukang Ager</h4>
                <p class="text-gray-700 cursor-pointer hover:text-orange-500">Rp.10.000</p>
            </div>
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-normal mt-4">Tukang Ager</h4>
                <p class="text-gray-700 cursor-pointer hover:text-orange-500">Rp.10.000</p>
            </div>
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-normal mt-4">Tukang Ager</h4>
                <p class="text-gray-700 cursor-pointer hover:text-orange-500">Rp.10.000</p>
            </div>
        </div>
    </div> 

    <div class="container mx-auto px-6 py-16">
        <p class="text-center text-2xl font-semibold mb-10">Desain</p>
        <div class="flex flex-wrap justify-center gap-4">
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <a href="product_details.html"><img src="https://i.ibb.co/47Sk9QL/product-1.jpg" alt="" class="w-full rounded-lg"></a>
                <a href="product_details.html">
                    <h4 class="text-gray-700 font-normal mt-4">Tukang Ketik</h4>
                </a>
                <p class="text-gray-700 cursor-pointer hover:text-orange-500">Rp. 10.000</p>
            </div>
      
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/b7ZVzYr/product-2.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-normal mt-4">Tukang Desain</h4>
                <p class="text-gray-700 cursor-pointer hover:text-orange-500">Rp.10.000</p>
            </div>
      
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-normal mt-4">Tukang Ager</h4>
                <p class="text-gray-700 cursor-pointer hover:text-orange-500">Rp.10.000</p>
            </div>
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-normal mt-4">Tukang Ager</h4>
                <p class="text-gray-700 cursor-pointer hover:text-orange-500">Rp.10.000</p>
            </div>
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-white">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-normal mt-4">Tukang Ager</h4>
                <p class="text-gray-700 cursor-pointer hover:text-orange-500">Rp.10.000</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-6 py-16">
        <p class="text-center text-2xl font-semibold mb-10">Music Virtual</p>
        <div class="flex flex-wrap justify-center gap-4">
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-gray-300">
                <a href="product_details.html"><img src="https://i.ibb.co/47Sk9QL/product-1.jpg" alt="" class="w-full rounded-lg"></a>
                <a href="product_details.html">
                    <h4 class="text-gray-700 font-normal mt-4">Tukang Ketik</h4>
                </a>
                <p class="text-gray-700 cursor-pointer hover:text-orange-500">Rp. 10.000</p>
            </div>
      
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-gray-300">
                <img src="https://i.ibb.co/b7ZVzYr/product-2.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-normal mt-4">Tukang Desain</h4>
                <p class="text-gray-700 cursor-pointer hover:text-orange-500">Rp.10.000</p>
            </div>
      
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-gray-300">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-normal mt-4">Tukang Ager</h4>
                <p class="text-gray-700 cursor-pointer hover:text-orange-500">Rp.10.000</p>
            </div>
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-gray-300">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-normal mt-4">Tukang Ager</h4>
                <p class="text-gray-700 cursor-pointer hover:text-orange-500">Rp.10.000</p>
            </div>
            <div class="w-full max-w-48 sm:w-1/5 p-4 text-center hover:transform hover:-translate-y-2 transition-transform shadow-2xl rounded-lg bg-gray-300">
                <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="w-full rounded-lg">
                <h4 class="text-gray-700 font-normal mt-4">Tukang Ager</h4>
                <p class="text-gray-700 cursor-pointer hover:text-orange-500">Rp.10.000</p>
            </div>
        </div>
    </div>
    
    <div class="container mx-auto px-6 max-w-5xl bg-gray-900">
        <div class="flex justify-center mb-6">
            <div class="text-center sm:w-1/3">
                <img src="image/Malaz_Solutions.png" alt="logo" class="w-32 bg-white mt-1 rounded-md">
                <p class="text-left text-white">PT. Malaz Solutions Indonesia </br>
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
</html>