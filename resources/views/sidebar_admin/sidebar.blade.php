<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Startup Merdeka</title>
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-600">

  <div class="flex h-screen" x-data="{ isOpen: false }">
    <!-- Sidebar -->
    <div class="w-64 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-md shadow-lg">
      <!-- Header -->
      <div class="flex items-center justify-center h-16 bg-blue-700 rounded-md">
      <img class="h-12 w-12 rounded-full" src="img/logo2.png" alt="Profile Image">
        <h1 class="text-black text-2xl font-bold">Startup Merdeka</h1>
      </div>

      <!-- Menu Items -->
      <div class="mt-4 space-y-2">
        <div class="flex items-center justify-center h-16 hover:bg-blue-600 rounded-lg transition duration-200">
        <img width="30" height="30" src="https://img.icons8.com/fluency/48/performance-macbook.png" alt="performance-macbook"/>
          <a href="/navbar" class="text-white font-medium">Dashboard</a>
        </div>

        <div class="flex items-center justify-center h-16 hover:bg-blue-600 rounded-lg transition duration-200">
        <img width="30" height="30" src="https://img.icons8.com/fluency/48/e-learning.png" alt="e-learning"/>
          <a href="../componen/contentManage.blade.php" class="text-white font-medium">Content Manage</a>
        </div>

        <div class="flex items-center justify-center h-16 hover:bg-blue-600 rounded-lg transition duration-200">
        <img width="30" height="30" src="https://img.icons8.com/clouds/100/user.png" alt="user"/>
          <a href="/dashboard" class="text-white font-medium">User  Manage</a>
        </div>

        <div class="flex items-center justify-center h-16 hover:bg-blue-600 rounded-lg transition duration-200">
        <img width="30" height="30" src="https://img.icons8.com/color/50/combo-chart.png" alt="combo-chart"/>
          <a href="/dashboard" class="text-white font-medium">Analytics</a>
        </div>
      </div>

      <!-- Logo Image -->
      <div class="relative flex justify-center items-center mt-4">
  <div>
    <button type="button" @click="isOpen = !isOpen"
      class="flex items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
      <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile Image">
    </button>
  </div>
   <!-- Teks di samping foto profil -->
   <div>
    <p class="text-white font-medium">Muhammad Pikih</p>
    <p class="text-gray-400 text-sm">Administrator</p>
  </div>

  <!-- Dropdown -->
  <div
    x-show="isOpen"
    x-transition:enter="transition ease-out duration-100 transform"
    x-transition:enter-start="opacity-0 scale-100"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75 transform"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
  </div>
</div>


    <div class="-mr-2 flex md:hidden">
      <!-- Mobile menu button-->
    </div>
  </div>
</body>
</html>