<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Startup Merdeka</title>
  <link rel="stylesheet" href="/public/css/style.css">
  @vite('resources/css/app.css')
</head>
<body class="bg-slate-50  m    ">

  <div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gradient-to-r from-violet-500 to-fuchsia-500 shadow-md rounded-md">
      <!-- Header -->
      <div class="flex items-center justify-center h-16 bg-red-500 rounded-md">
        <h1 class="text-slate-50 text-xl">Startup Merdeka</h1>
      </div>

      <!-- Menu Items -->
      <div class="mt-4 space-y-4">
        <div class="flex items-center justify-center h-16 hover:bg-slate-50 rounded-l-full">
            <a href="/dashboard" class="hover:underline text-neutral-800">Dashboard</a>
        </div>

        <div class="flex items-center justify-center h-16 hover:bg-slate-50 rounded-l-full">
            <a href="/dashboard" class="hover:underline text-neutral-800">Content Manage</a> 
        </div>

        <div class="flex items-center justify-center h-16 hover:bg-slate-50 rounded-l-full">
          <h1 class="hover:underline text-neutral-800">
            <a href="/dashboard">User Manage</a>
          </h1>
        </div>

        <div class="flex items-center justify-center h-16 hover:bg-slate-50 rounded-l-full">
          <h1 class="hover:underline text-neutral-800">
            <a href="/dashboard">Analytics</a>
          </h1>
        </div>
      </div>

      <!-- Logo Image -->
      <div class="relative ml-3">
              <div>
                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>
              <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
              </div>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
    
  </div>

</body>
</html>
