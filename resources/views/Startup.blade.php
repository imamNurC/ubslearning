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
      <div class="flex items-center justify-center mt-8">
        <img src="/public/logo22.png" alt="Startup Merdeka Logo" class="w-24 h-24">
      </div>
    </div>
    
  </div>

</body>
</html>
