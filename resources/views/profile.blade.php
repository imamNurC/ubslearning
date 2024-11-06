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
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />
    <title>Profile</title>
</head>
<body class="font-poppins bg-white bg-gradient-to-r from-blue-400 via-purple-300 to-pink-200 py-10">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center">
            <div>
                <a href="index.html"><img src="image/Malaz_Solutions.png" alt="LMS" class="h-12"></a>
            </div>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="{{ route('home') }}" class="text-black font-bold hover:text-red-500">Home</a></li>
                    <li><a href="{{ route('product') }}" class="text-black font-bold hover:text-red-500">Product</a></li>
                    <li><a href="{{ route('profile') }}" class="text-black font-bold hover:text-red-500">Profile</a></li>
                </ul>
            </nav>
        </div>
        <hr class="border-gray-400 w-full">

        <!-- component -->
<div class="h-screen flex flex-wrap items-center  justify-center">
    <div class="container lg:w-2/6 xl:w-2/7 sm:w-full md:w-2/3     transform   duration-200 easy-in-out">
        <div class="flex justify-center px-5  -mt-12">
            <img class="h-32 w-32 bg-white p-2 rounded-full   " src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" alt="" />

        </div>
        <div class=" ">
            <div class="text-center px-14">
                <h2 class="text-gray-800 text-3xl font-bold">Mohit Dhiman</h2>
                <a class="text-gray-500 mt-2 hover:text-blue-500" href="https://www.instagram.com/immohitdhiman/" target="BLANK()">@immohitdhiman</a>
                <p class="mt-2 text-gray-500 text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
            </div>
            <hr class="mt-6 border-gray-400" />
            <div class="flex">
                <div class="text-center w-1/2 p-4 hover:bg-gray-100 cursor-pointer">
                    <p><span class="font-semibold">100 </span> Hours</p>
                </div>
                <div class="border"></div>
                <div class="text-center w-1/2 p-4 hover:bg-gray-100 cursor-pointer">
                    <p> <span class="font-semibold">5 </span> Content</p>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>